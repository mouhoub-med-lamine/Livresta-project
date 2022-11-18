<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    //
    public function Users() {

        $alluser = Users::all();

        return view('Users' , compact('alluser'));
    }
}
