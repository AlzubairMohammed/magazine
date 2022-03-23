<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\{
    Author
};

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
{
    return [
        'id'=>$this->id,
        'postTitle'=>$this->postTitle,
        'postContent'=>$this->postContent,
        'likesNumber'=>$this->likesNumber,
        'section'=>$this->section,
        'created_at'=>$this->created_at,
    ];
}
}
