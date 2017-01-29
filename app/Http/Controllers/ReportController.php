<?php

namespace App\Http\Controllers;

class ReportController
{
    public function index()
    {
        return view('csv.download');
    }
}
