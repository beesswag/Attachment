<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Todo;
class todoController extends Controller
{
    public function store(Request $request){
        //dd($request->all());
        
        $todo = new Todo;
        $todo->user_id = Auth::user()->id;
        $todo->todo = $request->todo;
        $todo->save();
        //Session::flash('success', 'Your activity has been added');
        return redirect()->back()->with('success', "Activity Added");
    }

    public function edit($id){
        $todo = Todo::find($id);
        return view('pages.edit')->with('todo', $todo);
    }

    public function update(Request $request, $id){
        $todo = Todo::find($id);
        $todo->todo = $request->todo;
        $todo->save();
        return redirect()->route('home')->with('success', 'Updated');
    }

    public function delete($id){
        $todo = Todo::find($id);
        $todo->delete();
        return redirect()->route('home')->with('success', 'Deleted');
    }
}
