<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
  function index() {
    $employee = Employee::get(['employee_id',
    'employee_name',
    'employee_address',
    'employee_phone_number'
  ]);

    //var_dump($supplier);
    return view('employee.index', compact('employee'));
  }
  function create(){
    return view('employee.create');
  }
  public function store(Request $request)
  {
    $txt_id = $request->input('txt_id');
    $txt_name = $request->input('txt_name');
    $txt_address = $request->input('txt_address');
    $txt_phone_number = $request->input('txt_phone_number');
    //echo $txt_id." ".$txt_name." ".$txt_address;

    employee::create([
      'employee_id'=>$txt_id,
      'employee_name'=>$txt_name,
      'employee_address'=>$txt_address,
      'employee_phone_number'=>$txt_phone_number

    ]);

    return redirect('/employee');
  }
  public function show($id){
    //echo "$id";
  $employee = employee::where('employee_id', $id)->get();
  return view('employee.show', compact('employee'));
  }
  public function edit($id){
    $employee = employee::where('employee_id', $id)->get();
    return view('employee.edit', compact('employee'));
  }
  public function update(Request $request, $id){
    $txtId = $request->input('txt_id');
    $txtName = $request->input('txt_name');
    $txtAddress = $request->input('txt_address');
    $txt_phone_number = $request->input('txt_phone_number');

      employee::where('employee_id', $id)->update([
      'employee_name' => $txtName,
      'employee_address' => $txtAddress,
      'employee_phone_number' => $txt_phone_number
    ]);
    return redirect('/employee');
  }
  public function destroy($id){
    $employee = employee::where('employee_id', $id)->first();
    $employee -> delete();
    return redirect('/employee');
  }
}
