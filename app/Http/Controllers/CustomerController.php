<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;


class CustomerController extends Controller
{
    //

    public function index(){
        return view('customers.index');
    }

    public function create(){
        return view('customers.create');
    }

    public function store(CustomerRequest $request ){
        dd($request->all());
    }

    public function show(int $id){

        return view('customers.show');

    }

    public function edit(int $id){

    }

    public function updated(int $id){

    }
    public function destroy (int $id){

    }
}
