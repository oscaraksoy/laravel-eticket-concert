<?php

namespace App\Http\Resources\Auth;

use App\Http\Resources\Resource;

class LogoutResource extends Resource
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
            'username' => $this->username,
            'email' => $this->email,
            'language' => $this->language,
            'joined_at' => dateYmdToDmy($this->created_at)
        ];
    }
}
