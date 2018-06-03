<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class jumpController extends Controller
{
    public function index()
    {
            $people = ['name1', 'name2', 'name3', 'name4'];
        return view('sites.about')->with('people', $people);
    }
}