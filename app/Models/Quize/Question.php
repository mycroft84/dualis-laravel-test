<?php

namespace App\Models\Quize;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Question extends Model
{
    protected $table = 'quize_questions';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(\App\Models\Quize\Category::class,'quize_category_id','id');
    }

    public function question()
    {
        return $this->belongsTo(\App\Models\Question::class,'question_id','id');
    }

    public function answers()
    {
        return $this->hasMany(Answer::class,'quize_question_id','id');
    }

    public function addQuestion(Category $quizeCategory,\App\Models\Question $question)
    {
        $qquestion = new Question();
        $qquestion->quize_category_id = $quizeCategory->getKey();
        $qquestion->question_id = $question->getKey();
        $qquestion->text = $question->text;
        $qquestion->save();

        $qquestion->addAnswers($question->answers);
    }

    /**
     * @param Collection $answers
     */
    protected function addAnswers(Collection $answers)
    {
        foreach ($answers as $item) {
            $answer = new Answer();
            $answer->quize_question_id = $this->getKey();
            $answer->answer_id = $item->getKey();
            $answer->text = $item->text;
            $answer->is_right = $item->is_right;
            $answer->save();
        }
    }

    public function getAnswerForJson()
    {
        $result = new Collection();

        foreach ($this->answers as $answer) {
            $temp = new Collection();
            $temp->put('id',$answer->getKey());
            $temp->put('text',$answer->text);

            $result->push($temp);
        }

        return $result;
    }
}
