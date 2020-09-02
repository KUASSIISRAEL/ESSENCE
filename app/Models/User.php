<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
  use Notifiable, HasApiTokens;

  protected $guarded = [];
  
  protected $hidden = ['password', 'admin','verified','confirmed','remember_token'];

  public function profile()
  {
  	return $this->hasOne(Profile::class);
  }
}
