<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileSystem extends Controller
{
    //
    public function index(){
        return view('file.index');
    }
    public function  Upload(Request $req){
    //   $file =  Storage::disk('local')->put('/file', $req->file('file'));
      $file =  $req->file('file')->store('/file', 'local');
      dd($file);
    }
}
