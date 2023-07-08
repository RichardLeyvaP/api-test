<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // $users =  User::all();
         $users =  User::paginate();
        return UserResource::collection($users);
    }
}
