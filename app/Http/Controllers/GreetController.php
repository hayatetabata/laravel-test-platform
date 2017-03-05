<?php

namespace App\Http\Controllers;

class GreetController extends Controller
{
    public function greet()
    {
        return view('greeting', ['name'=>'Yuki']);
    }

}
