<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Item;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('laravel-examples.users-management', compact('users'));
    }

    public function getUsers(){
        User::all();
    }


    // public function getDashboards()
    // {
    //     $items = hasItems()::table('items')->get();
    //     return view('dashboard', compact('items'));
    // }
}

