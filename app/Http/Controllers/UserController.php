<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){
        $users = response()->json(Task::all());
        return $users;
    }

    public function show($id){
        $user = response()->json(Task::find($id));
        return $user;
    }

    public function listView(){
        $users = Task::all();
        return view('user.list', ['users' => $users]);
    }




}
