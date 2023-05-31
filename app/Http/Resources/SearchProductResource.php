<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SearchProductResource extends JsonResource
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
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'price' => $this->price,
            'qty' => 1,
            'remainder' => $this->remainder,
            'images' => FileResource::collection($this->images()->orderBy('rank')->get()),
            'category_name' => $this->getCategoriesNameToString($this->categories),
            'isDiscount' => $this->isDiscount,
            'discount_value' => $this->discount_value,
            'discount_type' => $this->discount_type,
            'new_price' => $this->getNewPrice(),
            'currency' => $this->currency,
            'locale'   => $this->getLocale()
        ];
    }
    public function getCategoriesNameToString($categories)
    {
        return collect($categories)->map(function ($item) {
            return $item->name;
        })->implode(', ');
    }
}
