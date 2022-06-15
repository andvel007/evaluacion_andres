<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'apellido' => $this->apellido,
            'cedula' => $this->cedula,
            'email' => $this->email,
            'password' => $this->password,
            'provincia'=>$this->provincia,
            'ciudad'=>$this->ciudad,
            'direccion'=>$this->direccion,
            'foto'=>$this->foto,
            'telefono'=>$this->telefono,
        ];
    }
}
