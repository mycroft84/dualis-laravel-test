<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Quize extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->getKey(),
            'categories'=>new QuizeCategoryCollection($this->categories)
        ];
    }
}
