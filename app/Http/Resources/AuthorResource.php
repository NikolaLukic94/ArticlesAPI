<?php

namespace App\Http\Resources;
use App\Http\Resources\AuthorResource as AuthorResource;
use Illuminate\Http\Resources\Json\JsonResource;

class AuthorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'type'       => 'users',
            'id'         => (string)$this->id,
        ];
    }
}
