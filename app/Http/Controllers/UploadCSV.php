<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadCSV extends Controller
{
    //

    public function uploadcsv(Request $request){
        $file = $request->file("data.csv");
        
    }
}
