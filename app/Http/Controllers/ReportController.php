<?php

namespace App\Http\Controllers;

use App\Models\Reporter;
use Storage;

class ReportController
{
    public function index()
    {
        return view('csv.download');
    }

    public function download()
    {
        $repObj = new Reporter();
        $filePath = storage_path().'/app/converted/';

        return response()->download($filePath.'2017');

    }
}
