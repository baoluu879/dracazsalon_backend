<?php
namespace App\Services;
use App\Model\city;

class city_function{

  public function fetching_all_data(){
    $something = new city();
    $data = $something::all();
    return $data;

  }

  public function fetching_data_with_condition($CountryCode){
    $something = new city();
    $data = $something::where("CountryCode", $CountryCode)->get();
    return $data;

  }
}
