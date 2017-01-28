<?php

namespace App\Http\Controllers\Lists;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FooController extends Controller
{
  public function index($name = 'hoge'){
    return view('foo',['name' => $name]);
  }
}
