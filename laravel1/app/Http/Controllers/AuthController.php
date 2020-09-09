<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function welcome(Request $data)
    {
        $name = $data['first-name'] . " " . $data["last"];

        //dd($data->all());
        return view('welocomee', ['name' => $name]);
    }
}
