<?php

namespace App\Http\Controllers;

class ReportController
{
    public function index()
    {
        return view('csv.download');
    }

    public function download()
    {
        return view('hello'); 
    }
}
