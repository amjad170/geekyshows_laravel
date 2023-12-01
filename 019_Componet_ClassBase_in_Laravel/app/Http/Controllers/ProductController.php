<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(){
        $data = "ClikKart's";

        $user = 'Admin';
        $userType = $user == 'Admin'? true : false;
        $students = ['Amjad','Kamal','Jaman','Mamun'];

        return view('product',['name'=>$data,'userType'=>$userType,'students'=>$students]);
    }
}
