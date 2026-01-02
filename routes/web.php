<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FileSystem;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {

        $users = \App\Models\User::all();
        $users->load('addresses');

        return view('welcome', compact('users'));

});

Route::get('/join', function (){
     $orderUsers = \DB::table('users')
     ->join('orders', 'users.id' , '=', 'orders.user_id')
     ->select('users.*', 'orders.*')
     ->get();
     dd($orderUsers);
});

Route::get('/outer-join', function (){

        $outerJoinLeft = DB::table('users')
        ->leftJoin('orders', 'users.id' ,'=', 'orders.user_id')
        ->select('users.name', 'orders.amount')
        ->get();

        dd($outerJoinLeft);

});



Route::get('/outer-join-right', function (){

        $outerJoinLeft = DB::table('orders')
        ->where('orders.id', '1')
        ->rightJoin('users', 'orders.user_id' ,'=', 'users.id')
        ->select('orders.amount', 'users.*')
        ->get();

        dd($outerJoinLeft);

});


Route::get('/outer-join-full', function (){

        $outerJoinLeft = DB::table('users')
        ->leftJoin('orders', 'users.id' ,'=', 'orders.user_id')
        ->select('users.*', 'orders.*')
        ->unionAll(
            \DB::table('users')
            ->rightJoin('orders', 'users.id', 'orders.user_id')
            ->select('users.*', 'orders.*')
        )->get();

        dd($outerJoinLeft);

});

Route::get('/file-upload', [FileSystem::class, 'index'])->name('file.index');
Route::post('/file-upload', [FileSystem::class, 'Upload'])->name('file.upload');

Route::resource('customers', CustomerController::class);
