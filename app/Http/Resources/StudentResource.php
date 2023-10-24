<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // A resource class represents a single model that needs to be transformed
        // into a JSON structure
        return [
            'id'                => $this->id,
            'name'              => $this->name,
            'phone'             => $this->phone,
            'city'              => $this->city,
            'address'           => $this->address,
            'created_at'        => $this->created_at,
            'updated_at'        => $this->updated_at,

        ];
    }
}
