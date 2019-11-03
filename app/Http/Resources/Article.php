<?php

namespace App\Http\Resources;

use App\Http\Resources\CommentRelationshipResource as CommentRelationshipResource;
use App\Http\Resources\ArticleRelationshipResource as ArticlesRelationshipResource;
use Illuminate\Http\Resources\Json\JsonResource;

class Article extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {   //this will return everything
        //return parent::toArray($request);

        //this will return only selected items
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'relationships' => new ArticlesRelationshipResource($this),
            'comments' => new CommentRelationshipResource($this)            
        ];
    }

    public function with($request) {
        return [
            'version' => '1.0.0',
            'author_url' => url('https://github.com/nick094')
        ];
    }
}
