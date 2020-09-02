<?php

namespace App\Http\Requests\Api\Users;

use App\Services\ALLCountries;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      'name'      => ['required','string','max:255'],
      'address'   => ['required','string','max:255'],
      'status'    => ['required','string',Rule::in($this->getStatus())],
      'ccode'     => ['required','string',Rule::in($this->country_codes()),'min:2','max:2'],
      'password'  => ['required','string','min:10','max:20','confirmed'],
      'phone'     => ['required','phone:'.mb_strtoupper($this->ccode), 'unique:users'],
      'email'     => ['required','string','unique:users','email:dns,filter','max:255'],
    ];
  }

  private function country_codes()
  {
    $countries = new ALLCountries();
    return $countries->getALLCountryCode();
  }

  private function getStatus()
  {
    return ['station', 'customer'];
  }
}
