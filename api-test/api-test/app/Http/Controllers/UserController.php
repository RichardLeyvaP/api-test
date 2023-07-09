<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use GuzzleHttp\Psr7\Message;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // $users =  User::all();
         $users =  User::paginate();
        return UserResource::collection($users);
    }

    public function store(StoreUpdateUserRequest $request)
    {
        $data = $request->validated();
        $data['password'] = bcrypt($request->password);
        $user = User::create($data); 
        return new UserResource($user);
    }

    public function show(string $id)
    {
        //    $user = User::find($id);
        // $user = User::where('id','=',$id)->get();
        // $user = User::where('id','=',$id)->first();
        // if(!$user)
        // {
        //     return response()->json(['message'=>'Usuario no encontrado'],404);
        // }

        $user = User::findOrFail($id);
        return new UserResource($user);
    }

    public function update(StoreUpdateUserRequest $request,string $id)
    {
        $user = User::findOrFail($id);
        $data = $request->all();
        $data['password'] = bcrypt($request->password);        
        $user->update($data);
        return new UserResource($user);
    }

    public function delete(string $id)
    {
        $user = User::findOrFail($id);
        $name = $user->name;
        $user->delete();
        return response()->json(['eliminado' => $name]);
    }
}
