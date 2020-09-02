<?php

namespace App\Http\Controllers\Api\Users;

use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Services\ALLCountries;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use Illuminate\Validation\ValidationException;
use Propaganistas\LaravelPhone\PhoneNumber;
use App\Http\Requests\Api\Users\RegisterRequest;
use App\Http\Resources\Api\Users\RegisterResource;

class RegisterController extends Controller
{
  private $countries;

  public function __construct()
  {
    $this->countries = new ALLCountries();
  }

	protected function castPhone($phone, $ccode)
  {
    return (string) PhoneNumber::make($phone, $ccode);
  }

  public function register(RegisterRequest $request)
  {
    $validate  = $request->validated();
    $password  = Hash::make($validate['password']);
    $countries = $this->countries->getCountries2($validate['ccode']);
    $phoneData = $this->castPhone($validate['phone'],$validate['ccode']);

		$dataOfUser = [
			'name'      => $validate['name'],
			'ccode'     => $validate['ccode'],
			'address'   => $validate['address'],
			'email'     => $validate['email'],
			'phone'     => $phoneData,
			'password'  => $password,
      'countries' => $countries,
		];

		$dataOfProfile = [
			'status' => $validate['status'],
		];

		DB::beginTransaction();

    try {
      $user = User::create($dataOfUser);
      $prof = $user->profile()->create($dataOfProfile);
      $data = RegisterResource::make($user);

      DB::commit();

      return response()->json([
        "code"    => "00",
        "status"  => "Success",
        "message" => "Your account is created.",
      ], 201);

    } catch (QueryException $e) {

      DB::rollback();

      if ($e->errorInfo[0] == "23505")
      {
        return response()->json([
          "code"    => "1001",
          "status"  => "Failed",
          "message" => "email or phone are taken.",
        ], 400);
      }
    }
  }

}
