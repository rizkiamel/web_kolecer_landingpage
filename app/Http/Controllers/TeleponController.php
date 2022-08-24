<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Telepon;

class TeleponController extends Controller
{
    //
    public function show(Telepon $telepon){
        return view('telepon.show', compact('telepon'));
    }
}
