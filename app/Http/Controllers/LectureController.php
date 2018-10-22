<?php

namespace App\Http\Controllers;

use App\lecture;
use App\User;
use App\Student;
use App\Grade;
use Illuminate\Http\Request;



class lectureController extends Controller
{
    public function index()
    {
        $count = 1;
        $lectures = Lecture::orderBy('name','asc')->paginate(20);
        return view('lecture/lectures', ['lectures' => $lectures, 'count' => $count]);
    }

    public function login()
    {
        $users = User::all();
        return view ('welcome',compact('users'));
    }

    public function create_lecture()
    {
        return view ('create_lectures');
    }

    public function store_lecture(Request $request)
    {

        $lecture = new Lecture;
        $lecture->name = $request->name;
        $lecture->description = $request->description;
        $lecture->save();
        return back();
    }

    public function lecturelist()
    {
        $lecture = Lecture::all();
        return view ('lecturelist',compact('lecture'));
    }

    public function edit_lecture()
    {
        $lecture= Lecture::all();
        return view ('edit_lecture',compact('lecture'));
    }


    public function edit2_lecture(Request $request,$id)
    {
        $lecture = Lecture::find($id);
        return view('edit2_lecture',compact('lecture'));
    }

    public function update_lecture(Request $request,$id)
    {

        $lecture = new Lecture;
        $lecture->name = $request->name;
        $lecture->description = $request->description;

        $lecture->save();
        return redirect(route('lecturelist'))->with('successMsg','lecture Successfully Updated');
    }

    public function delete_lecture($id)
    {

        lecture::where('id', $id)->delete();
        return redirect(route('lecturelist'))->with('successMsg','lecture Successfully Delete');
    }

}
