<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        $user = Auth::user();
        echo "name: $user->name \n email: $user->email \n id: $user->id";
//        echo "email: $user->email \n";
//        echo "id: $user->id";
    }
}
