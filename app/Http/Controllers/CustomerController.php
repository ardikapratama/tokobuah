<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
  function index() {
    $Customer = Customer ::get(['customer_id',
    'name',
    'address']);

    //var_dump($supplier);
    return view('customer.index', compact('Customer'));
  }
  function create(){
    // echo "telo";
        return view('customer.create');
  }
  function store(Request $request) {
    echo "cobak";
  }
}
