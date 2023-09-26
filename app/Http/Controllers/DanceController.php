<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DanceController extends Controller
{
    public function index(){
        return view('dance.index');
    }
    public function class(){
        return view('dance.class');
    }
    public function show(){
        return view('dance.show');
    }
    public function contact(){
        return view('dance.contact');
    }
    public function short(){
        return view('dance.short');
    }
    public function train(){
        return view('dance.training');
    }
    public function testmonail(){
        return view('dance.testmonial');
    }
    public function addcontact(Request $request){
        $request->validate([
        'Name' =>'string|required',
        'Phone_Number'=>'string|required',
        'Email' =>'string|required',
        'Message'=>'string|required'
    ]);
        DB::table('contact')->insert($request->only('Name','Phone_Number','Email','Message'));
        return redirect('/');
    }
}
