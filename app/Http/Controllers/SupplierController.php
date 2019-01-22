<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\supplier;

class SupplierController extends Controller
{
  function index() {
    $supplier = supplier ::get(['supplier_id',
    'supplier_name',
    'supplier_address']);

    //var_dump($supplier);
    return view('supplier.index', compact('supplier'));
  }
  function create(){
    return view('supplier.create');
  }
  public function store(Request $request)
  {
    $txt_id = $request->input('txt_id');
    $txt_name = $request->input('txt_name');
    $txt_address = $request->input('txt_address');
    //echo $txt_id." ".$txt_name." ".$txt_address;

    supplier::create([
      'supplier_id'=>$txt_id,
      'supplier_name'=>$txt_name,
      'supplier_address'=>$txt_address
    ]);

    return redirect('/dataSupplier');
  }
  public function show($id){
    //echo "$id";
  $supplier = supplier::where('supplier_id', $id)->get();
  return view('supplier.show', compact('supplier'));
  }
  public function edit($id){
    $supplier = supplier::where('supplier_id', $id)->get();
    return view('supplier.edit', compact('supplier'));
  }
  public function update(Request $request, $id){
    $txtId = $request->input('txt_id');
    $txtName = $request->input('txt_name');
    $txtAddress = $request->input('txt_address');

    supplier::where('supplier_id', $id)->update([
      'supplier_name' => $txtName,
      'supplier_address' => $txtAddress
    ]);
    return redirect('/supplier');
  }
  public function destroy($id){
    $supplier = supplier::where('supplier_id', $id)->first();
    $supplier -> delete();
    return redirect('/supplier');
  }
}
