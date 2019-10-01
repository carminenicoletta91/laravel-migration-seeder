<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Employee;
use App\Model\Place;
use App\Model\Company;
class MyController extends Controller
{
    public function getAllEmployee(){
      $type = 'Employees';
      $values=Employee::all();

      return view('EmployeesPage',compact('values','type'));
    }
    public function getAllPlace(){
      $type ='Places';
      $values=Place::all();

      return view('PlacesPage',compact('type','values'));
    }
    public function getAllCompany(){

      $type = 'Companies';
      $values =Company::all();

      return view('CompaniesPage',compact('type','values'));
    }
}
