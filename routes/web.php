<?php

use App\Http\Controllers\UploadCSV;
use Illuminate\Support\Facades\Route;


Route::get('/upload', [UploadCSV::class, 'uploadcsv']);
Route::get('/', function () {
    return view('welcome');
});
