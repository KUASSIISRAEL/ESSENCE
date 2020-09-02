<?php namespace App\Services;

use Illuminate\Support\Collection;
use PragmaRX\Countries\Package\Countries;

class ALLCountries {

  private $countries;

  public function __construct()
  {
    $this->countries = new Countries();
  }

  public function countriesAll()
  {
    return $this->countries->all()->pluck('name.common')->toArray();
  }

  public function getAllCountries2()
  {
    return array_filter($this->countries->all()->pluck('name.common', 'iso_3166_1_alpha2')->toArray());
  }

  public function getAllCountries3()
  {
    return array_filter($this->countries->all()->pluck('name.common', 'iso_3166_1_alpha3')->toArray());
  }

  public function getCountries2($name)
  {
    return $this->getAllCountries2()[$name];
  }

  public function getCountries3($ccode)
  {
    return $this->getAllCountries3()[$ccode];
  }

  public function getStates($name)
  {
    return array_filter($this->countries->where('cca3', (string) $name)->first()->hydrateStates()->states->pluck('name', 'postal')->toArray());
  }

  public function getALLCountryCode()
  {
    return array_values(array_filter($this->countries->all()->pluck('iso_3166_1_alpha2')->toArray()));
  }

}
