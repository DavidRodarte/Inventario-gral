<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('isAdmin');
    }

    public function usuarios(){
        $usuarios=User::all();
        return view('admin.lista',compact('usuarios'));
    }

}
