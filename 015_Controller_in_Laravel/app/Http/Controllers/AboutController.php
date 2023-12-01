<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show($id="Dafalt Data"){
        $name = "Amjad";   //$name  data send from controller
        return view('about',['keyid'=>$id,"keyname"=>$name]); //$id  data send from route parameter
    }
}
