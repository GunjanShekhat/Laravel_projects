<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        DB::insert('insert into users (id, name,email, password) values (?, ?,?, ?)', [1, 'Gunjan','gunjan@gmail.com','abc']);
        $user = DB::select('select * from users');
        return $user;
        // return 'Welcome to USER_CONTROLLER';
    }
}