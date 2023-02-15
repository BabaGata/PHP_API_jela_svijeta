<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ManyResource extends JsonResource
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
            'title'=>$this->title,
            'slug'=>$this->slug,
            'amount' => $this->whenPivotLoaded('dish_ingredient', function () {
                return $this->pivot->amount;
            }),
            'typeAmount' => $this->whenPivotLoaded('dish_ingredient', function () {
                return $this->pivot->type_amount;
            }),
        ];
    }
}
