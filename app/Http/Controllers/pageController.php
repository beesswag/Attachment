<?php

namespace App\Http\Controllers;
use App\Names;
use Auth;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function sub(){
        return view ('pages.sub');
    }

    public function register(Request $request)
    {
        $request->validate([
            'fname' => 'required|min:5',
            'lname' => 'required|min:5',
            'prog' => 'required|string',
            'email' => 'required|email|unique:users,email',
        ]);
        $named = Auth::user()->id;
        $named = new Names;
        $named->fname = $request->fname;
        $named->lname = $request->lname;
        $named->email = $request->email;
        $named->prog = $request->prog;
        // $names->fname = Input::get("fname");
        // $names->lname = Input::get("lname");
        // $names->prog = Input::get("prog");
        // $names->email = Input::get("emai");
        $named->save();
        //Session::flash('success', 'Your activity has been added');
        return redirect()->back()->with('success', "Subscribed");
        //return view('pages.sub')->with('success', "subscried");
    }
}
