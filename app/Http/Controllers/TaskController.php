<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        return view('newTaskForm');
    }

    public function register1(Request $request){
        echo "<pre>";
        print_r($request->all());
    }
}
