<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;

class UserController extends Controller
{
    //

    public function form(){
        $kategori = Category::find(1);

        return view('user.form', compact('kategori'));
    }

    public function show(User $user){
        return view('user.show', compact('user'));
    }
}
