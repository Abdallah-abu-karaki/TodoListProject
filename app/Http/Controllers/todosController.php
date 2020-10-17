<?php

namespace App\Http\Controllers;

use App\Models\Todos;
use Illuminate\Http\Request;

class todosController extends Controller
{
    public function index(){
        $todos = Todos::all();
        return view('todos',compact('todos'));
    }
    public function show(Todos $todo_id){

        return view('show')->with('todo',$todo_id);
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){

        $request->validate([
           'title'=>'required|min:6',
           'description'=>'required',
        ]);

        Todos::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'completed' =>false,
        ]);
        $request->session()->flash('success','todo created successfully');
        return redirect('todos');
    }
    public function edit(Todos $todo_id){

        return view('edit')->with('todo',$todo_id);
    }
    public function save_change(Request $request ,Todos $todo_id){

        $todo_id->update([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);
        session()->flash('success','todo update successfully');
        return redirect('todos');
    }
    public function delete(Todos $todo_id){

        $todo_id->delete();
        session()->flash('success','delete todo successfully');
        return redirect('todos');
    }
    public function completed(Todos $todo_id){

        $todo_id->update([
           'completed'=>true,
        ]);
        session()->flash('success','This todo is completed');
        return redirect('todos');
    }
}
