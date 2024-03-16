<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $userLists = [
            ['id' => 1, 'name' => 'nyonyo', 'address' => 'ygn'],
            ['id' => 2, 'name' => 'tuntun', 'address' => 'bago'],
            ['id' => 3, 'name' => 'susu', 'address' => 'ygn']
        ];
        return view('home', ['userlists' => $userLists]);
    }
}
