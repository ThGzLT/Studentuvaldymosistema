@extends('layouts.app')



    <div class="container">

        <table class="table table-bordered table-striped table-hover ">
            <thead>
            <tr>
                <th>ID</th>
                <th>student_id</th>
                <th>lecture_id</th>
                <th>Grade</th>

                {{-- <th class="text-center">Action</th> --}}
            </tr>
            </thead>
            <tbody>
            @foreach ($grades  as $course)
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->student_id }}</td>
                    <td>{{ $course->lecture_id }}</td>
                    <td>{{ $course->grade }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{-- {{ $students->links() }} --}}
    </div>
