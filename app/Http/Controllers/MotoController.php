<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Moto;

class MotoController extends Controller
{
    //


    public function index(){
        $motos = Moto::all();
        return $motos->toJson();
    }
}
