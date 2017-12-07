<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\QuestionStore;
use App\Http\Resources\QuestionCollection;
use App\Models\Question;

class QuestionController extends Controller
{
    public function index()
    {
        return new QuestionCollection(Question::all());
    }

    public function create(QuestionStore $request)
    {
        $question = new Question();
        $question->category_id = $request->get('category_id');
        $question->text = $request->get('text');
        $question->save();

        return [
            'id'=>$question->getKey()
        ];
    }

    public function delete(Question $question)
    {
        $question->delete();
    }

    public function update(QuestionStore $request,Question $question)
    {
        $question->category_id = $request->get('category_id');
        $question->text = $request->get('text');
        $question->save();
    }
}
