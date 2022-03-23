<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Array_;

class HelloWorldController extends Controller
{
    public function index()
    {
        $helloWorld = 'Hello World';

        return view('hello_world.index', ['helloWorld' => $helloWorld, 'banana'=>'cenoura']);



    }
}
