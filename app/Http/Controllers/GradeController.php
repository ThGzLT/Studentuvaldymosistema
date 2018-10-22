<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lecture;
use App\Grade;
use App\Student;
use App\User;
class GradeController extends Controller
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

    public function create ()
    {
        return view ('create_grade');
    }
    public function create_grade()
    {
        $students = Student::orderBy('first_name','asc')->get();
        $lectures = Lecture::orderBy('name','asc')->get();
        return view('create_grade', ['students' => $students, 'lectures' => $lectures]);
    }
    public function store_grade(Request $request)
    {

        $grade = new Grade;
        $grade->lecture_id = $request->lecture_id;
        $grade->student_id = $request->student_id;
        $grade->grade = $request->grade;
        $grade->save();
        return back();
    }
    public function results($id)
    {
        $student = Student::find($id);
        $grades = Grade::where('student_id', $id)->get();
        return view('gradelistall', ['student'=> $student, 'grades' => $grades]);
    }
    public function gradelist()
    {
        $grades= Grade::all();
        return view ('gradelist',compact('grades'));
    }
    public function gradeview()
    {
        $grades= Grade::all();
        return view ('gradeview',compact('grades'));
    }
    public function gradeview2(Request $request,$student_id)
    {
        $grades= grade::find($student_id);
        return view ('gradeviewsingle',compact('grades'));

    }
    public function edit_grade()
    {
        $grades= Grade::all();
        return view ('edit_grade',compact('grades'));
    }


    public function edit2_grade(Request $request,$id)
    {
        $grade = grade::find($id);
        return view('edit2_grade',compact('grade'));
    }

    public function update_grade(Request $request,$id)
    {

        $grade = new Grade;
        $grade->grade_name = $request->gradename;
        $grade->grade_id = $request->gradeid;
        $grade->student_enrolled = $request->studentenrolled;
        $grade->room = $request->room;
        $grade->save();
        return redirect(route('gradelist'))->with('successMsg','grade Successfully Updated');
    }

    public function delete_grade($id)
    {
        grade::find($id)->delete_grade();
        return redirect(route('gradelist'))->with('successMsg','grade Successfully Delete');
    }

}