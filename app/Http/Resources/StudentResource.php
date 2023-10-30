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
        // provide a convenient way to transform and format data before sending it as a response.
        //They allow you to shape the output of your API or web application in a structured and consistent manner.
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
