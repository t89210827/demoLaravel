<?php

namespace App\Http\Controllers\web;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class jumpController extends Controller
{
    public function index()
    {
        $people = ['name1', 'name2', 'name3', 'name4'];
        return view('sites.about')->with('people', $people);
    }

    public function returnUser()
    {
        $user = User::all();
        return $user;
    }

    public function returnParam($id)
    {
        $user = User::findOrFail($id);
//        if(is_null($user)){
//            abort(404);
//        };
        return view('sites.show',compact('user'));
    }

    public function from()
    {
        return view('sites.from');
    }

}