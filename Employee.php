<?php
namespace App\Controllers;
use \CodeIgniter\Controller;
use App\Models\EmployeeModel;

class Employee extends Controller
{
public $empModel;
public function _construct()
{

 //$this->load->library('form_validation');
 //<div class="form-group">
   // $this->load->helper('form');
    $this->empModel=new EmployeeModel();
}
public function addEmp()
{
  return view('empadd_view');
}

}
?>