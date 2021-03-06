<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    //

    public function index(){
        return view('todos.index')->with('todos',Todo::all());
    }

    public function show($todo_id){
        return view('todos.show')->with('todo',Todo::find($todo_id));
    }
}
