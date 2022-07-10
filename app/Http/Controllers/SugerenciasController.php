<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SugerenciasController extends Controller
{
    public function sendMails(){
        return view('sugerencias');
    }

    public function sendMailsProcessing(){
        return request()->all();
    }
}
