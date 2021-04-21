<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index (){
        $user= User::paginate(10);
        return view('crud',[
            'users'=>$user
        ]);
    }
    function show($id){
        $user= User::findorFail($id);
        return view('show',[
            'user'=>$user
        ]);
    }
    function create(){

        return view('create');
    }
    function store(){
        \request()->validate([
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'phone'=>'required'
        ]);
        $user = new User();
        $user->name= \request('name');
        $user->email= \request('email');
        $user->address= \request('address');
        $user->phone= \request('phone');
        $user->save();
        return redirect('/employee');

    }
    function edit($id){
        $user = User::findOrFail($id);
        return view('edit',[
            'user'=>$user
        ]);
    }
    function update($id){
        \request()->validate([
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'phone'=>'required'
        ]);
        $user = User::findOrFail($id);
        $user->name= \request('name');
        $user->email= \request('email');
        $user->address= \request('address');
        $user->phone= \request('phone');
        $user->save();
        return redirect('/employee');
    }
    function delete($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/employee')->with('success', 'Project deleted successfully');
    }
}
