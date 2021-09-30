<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $user = User::create($data);
        return response()->json($user);
    }

    public function show($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $user = User::find($id);
        $user->update($data);
        return response()->json($user);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $deleted = $user->delete();
        return response()->json($deleted);
    }
}
