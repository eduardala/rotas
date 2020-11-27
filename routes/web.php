<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/produtos/{n}', function ($n) {
    return view('produtos', ['n' => $n]);
})->where('n','[1-11]');

Route::get('/serie/{x}/{y}/{z}', function ($x,$y,$z) {
  return view('serie', ['x' => $x, 'y' => $y, 'z' => $z]);

});

Route::get('/questionario/{q1}/{q2}/{q3}/{q4}/{q5}/{q6}/{q7}/{q8}/{q9}/{q10}', function ($q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9,$q10) {
    return view('questionario', ['q1' => $q1, 'q2' => $q2, 'q3' => $q3, 'q4' => $q4, 'q5' => $q5, 'q6' => $q6, $q7, 'q7' => $q7, 'q8' => $q8, 'q9' => $q9, 'q10' => $q10]);        
});