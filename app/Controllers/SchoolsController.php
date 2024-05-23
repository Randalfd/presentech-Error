<?php

namespace App\Controllers;
use App\Models\SchoolsModel;
use App\Models\AdressesModel;
use App\Models\CitiesModel;

class SchoolsController extends BaseController
{
  private $addressModel;
  private $citiesModel;
  private $schoolsModel;
  public function __construct()
  {
      $this->schoolsModel = new SchoolsModel();
      $this->addressModel = new AdressesModel(); 
      $this->citiesModel = new CitiesModel(); 
  }

  public function index()
  {
      return view('schools/index');
  }

  public function register($school){
    $school = [
      'school_name' => $this->request->getPost('school_name'),
      'city' => $this->request->getPost('city'),
      'st_number' => $this->request->getPost('st_number')
    ];

  }

}