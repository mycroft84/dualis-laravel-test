<?php

namespace App\Models\Quize;

use App\Models\Quize;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Category extends Model
{
    protected $table = 'quize_categories';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function quize()
    {
        return $this->belongsTo(Quize::class,'quize_id','id');
    }

    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class,'category_id','id');
    }

    public function questions()
    {
        return $this->hasMany(\App\Models\Quize\Question::class,'quize_category_id','id');
    }

    public function addCategory(Quize $quize,\App\Models\Category $category)
    {
        $qcategory = new Category();
        $qcategory->quize_id = $quize->getKey();
        $qcategory->category_id = $category->getKey();
        $qcategory->text = $category->name;
        $qcategory->save();

        return $qcategory;
    }

    public function getQuestionsForJson()
    {
        $result = new Collection();

        foreach ($this->questions as $question) {
            $temp = new Collection();
            $temp->put('id',$question->getKey());
            $temp->put('text',$question->text);
            $temp->put('answers',$question->getAnswerForJson());

            $result->push($temp);
        }

        return $result;
    }

}
