<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JoinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $users = DB::table('join')->paginate(5);
        return view('dance.students',['courses'=>$users]);
    }

    public function create()
    {
        return view('dance.addstudent');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'Name' =>'string|required',
            'Phone_Number'=>'string|required',
            'ID' =>'string|required',
            'email'=>'string|required'
        ]);
            DB::table('join')->insert($request->only('Name','Phone_Number','ID','Email'));
            return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
