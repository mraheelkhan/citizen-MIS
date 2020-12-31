<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register10;
class ApiController extends Controller
{
    public function index(){
        return Register10::all();
    }

    public function store(Request $request){
        $reg = Register10::create($request->all());
        return $reg;
    }
}
