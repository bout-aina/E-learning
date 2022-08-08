<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
         // 
       $data['id'] = $this->id;
       $data['name'] = $this->name;
       $data['email'] = $this->email;
       $data['faculte'] = $this->faculte;
       $data['type'] = $this->type;
       $data['year'] = $this->year;
       $data['created_at'] = $this->created_at->format('l jS \\of F Y ');
       
       return $data;
    }
}
