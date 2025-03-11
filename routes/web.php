<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('contact_form');
});

Route::post('/submit-contact', function (Request $request) {
    return view('contact_result', ['data' => $request->all()]);
});
