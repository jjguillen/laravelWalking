<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\UserResource;

class GrupoResource extends JsonResource
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
            'nombre' => $this->nombre,
            'nivel' => $this->nivel,
            'federado' => $this->federado,
            'inscritos' => UserResource::collection($this->componentes),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
