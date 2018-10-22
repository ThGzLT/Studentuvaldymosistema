<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;
use App\Grade;
class StudentController extends Controller
{
    public function index()
    {
        return view ('home');
    }

    public function login()
    {
        $users = User::all();
        return view ('welcome',compact('users'));
    }


    public function create()
    {
        return view ('create');
    }


    public function store(Request $request)
    {

        $student = new Student;
        $student->first_name = $request->firstname;
        $student->last_name = $request->lastname;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->save();
        return back();
    }

    public function studentlist()
    {
        $students= Student::all();
        return view ('studentlist',compact('students'));
    }

    public function studentview()
    {
        $students= Student::all();
        return view ('studentview',compact('students'));
    }
    public function studentview2(Request $request,$id)
    {

        $students = Student::find($id);
        return view('studentviewsingle',compact('students'));

    }

    public function edit()
    {
        $students= Student::all();
        return view ('edit',compact('students'));
    }


    public function editdelete(Request $request,$id)
    {
        $student = Student::find($id);
        return view('editdelete',compact('student'));
    }

    public function update(Request $request,$id)
    {

        $student = Student::find($id);
        $student->first_name = $request->firstname;
        $student->last_name = $request->lastname;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->save();
        return redirect(route('studentlist'))->with('successMsg','Student Successfully Update');
    }

    public function delete($id)
    {
        Student::find($id)->delete();
        return redirect(route('studentlist'))->with('successMsg','Student Successfully Delete');
    }

}