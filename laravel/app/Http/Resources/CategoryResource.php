<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            'id' => $this->id,
            'parent_id' => $this->parent_id,
            'name' => $this->name,
            'created_at' => (string)$this->created_at,
            'updated_at' => (string)$this->updated_at,
            'children' => $this->childrenCategories,
            'articles' => $this->articles,
        ];
    }
}
