<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user($id=null, $name=null){
        return view('User.User-profil')
        ->with('id', $id)
        ->with('name',$name);
}
}