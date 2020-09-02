<?php

namespace App\Http\Resources\Api\Users;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class RegisterResource extends JsonResource
{
  public function toArray($request)
  {
    $created = Carbon::parse($this->created_at);
    $updated = Carbon::parse($this->updated_at);

    $data = [
      'id'      => $this->id,
      'name'    => $this->name,
      'email'   => $this->email,
      'phone'   => $this->phone,
      'address' => $this->address,
      'country' => $this->countries,
      'status'  => $this->profile->status,
      'created' => $created->toDateTimeString(),
      'updated' => $updated->toDateTimeString(),
    ];
    
    return [
      'code'   => '00',
      'status' => 'Success',
      'data'   => $data,
    ];
  }
}
