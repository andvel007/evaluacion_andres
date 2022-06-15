<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DeviceResource extends JsonResource
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
            'nombre' => $this->nombre,
            'marca' => $this->marca,
            'modelo' => $this->modelo,
            'color' => $this->color,
            'serie' => $this->serie,
            'mac'=>$this->mac,
            'sistemaop'=>$this->sistemaop,
            'cargador'=>$this->cargador,
            'observacion'=>$this->observacion,
        ];
    }
}
