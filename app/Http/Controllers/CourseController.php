<?php

namespace App\Http\Controllers;

use App\Events\AlertCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $courses= DB::table('courses')->paginate(5);
        return view('dance.courses',['courses'=>$courses]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dance.addcourse');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'string|required'
        ]);
        DB::table('courses')->insert($request->only('name','strat_time','end_time'));
        return redirect('/courses');
        event(new AlertCourse);
        // store2($request);
    }

    public function store2(Request $request){
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
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
