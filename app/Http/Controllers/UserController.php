<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function getAll()
    {
        $data = array(
            'users' => UserModel::all()
        );
        return view('userList_admin', $data);
    }
}
