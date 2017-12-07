<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\AnswerStore;
use App\Http\Resources\AnswerCollection;
use App\Models\Answers;

class AnswerController extends Controller
{
    public function index()
    {
        return new AnswerCollection(Answers::all());
    }

    public function create(AnswerStore $request)
    {
        $answer = new Answers();
        $answer->question_id = $request->get('question_id');
        $answer->is_right = (bool) $request->get('is_right');
        $answer->text = $request->get('text');
        $answer->save();

        return [
            'id'=>$answer->getKey()
        ];
    }

    public function delete(Answers $answer)
    {
        $answer->delete();
    }

    public function update(AnswerStore $request,Answers $answer)
    {
        $answer->question_id = $request->get('question_id');
        $answer->text = $request->get('text');
        $answer->is_right = (bool) $request->get('is_right');
        $answer->save();
    }
}
