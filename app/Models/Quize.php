<?php

namespace App\Models;

use App\Models\Quize\Answer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Quize extends Model
{
    protected $table = 'quize';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function categories()
    {
        return $this->hasMany(\App\Models\Quize\Category::class,'quize_id','id');
    }

    public function createQuize()
    {
        $data = $this->generateQuize();

        $quize = $this->setQuizeHeader();

        $quize->setQuizeCategory($data);

        dd($quize);
    }

    /**
     * @return Collection
     */
    public function generateQuize()
    {
        $result = new Collection();

        $categories = Category::all();
        foreach ($categories as $item)
        {
            $temp = new Collection();
            $temp->put('category',$item);

            $question = $item->questions()->orderByRaw("RAND()")->first();
            $temp->put('question',$question);

            $result->push($temp);
        }

        return $result;
    }

    protected function setQuizeHeader()
    {
        $quize = new Quize();
        $quize->save();

        return $quize;
    }

    /**
     * @param Collection[] $data
     */
    protected function setQuizeCategory($data)
    {
        foreach ($data as $item)
        {
            $category = $item->get('category');
            $question = $item->get('question');

            $quizeCategory = (new \App\Models\Quize\Category())->addCategory($this,$category);

            (new \App\Models\Quize\Question())->addQuestion($quizeCategory,$question);
        }
    }

    public function getForJson()
    {
        $result = new Collection();
        $result->put('id',$this->getKey());
        $result->put('categories',$this->getCategoriesForJson());

        return $result;
    }

    public function getCategoriesForJson()
    {
        $result = new Collection();

        foreach ($this->categories as $item)
        {
            $temp = new Collection();
            $temp->put('id',$item->getKey());
            $temp->put('text',$item->text);
            $temp->put('questions',$item->getQuestionsForJson());

            $result->push($temp);
        }

        return $result;
    }

    public function getResult(array $ids)
    {
        $answers = Answer::whereIn('id',$ids)->get();

        $count = $answers->count();
        $sum = $answers->sum('is_right');

        return [
            'good'=>$sum,
            'percent'=>($sum/$count) *  100
        ];
    }
}
