<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = DB::select('select * from users');
        // dd($users);
        return view('users.index')->with(['users' => $users]);
    }
}
