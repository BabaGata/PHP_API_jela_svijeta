<?php

namespace App\Http\Resources;

use App\Models\Tag;
use Illuminate\Http\Resources\Json\JsonResource;

class DishResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $with = explode(',', strtr($request->input('with', ''),[' '=>'']));

        $data = [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'status' => $this->status,
        ];
    
        if (in_array('category', $with)) {
            $data['category'] = new ManyResource($this->category);
        }
    
        if (in_array('tags', $with)) {
            $data['tags'] = ManyResource::collection($this->tags);
        }
    
        if (in_array('ingredients', $with)) {
            $data['ingredients'] = ManyResource::collection($this->ingredients);
        }
    
        return $data;
    }
}
