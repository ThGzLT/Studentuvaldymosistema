@extends('layouts.app')


    <div class="container">

        <table class="table table-bordered table-striped table-hover ">
            <thead>
            <tr>
                <th>ID</th>
                <th>lecture</th>
                <th>student_id</th>
                <th>lecture_id</th>
                <th>Grade</th>

                {{-- <th class="text-center">Action</th> --}}
            </tr>
            </thead>
            <tbody>
            @foreach ($grades  as $grade)
                <tr>
                    <td>{{ $grade->id }}</td>
                    <td>{{$grade->lecture->name}}</td>
                    <td>{{ $grade->student_id }}</td>
                    <td>{{ $grade->lecture_id }}</td>
                    <td>{{ $grade->grade }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{-- {{ $students->links() }} --}}
    </div>
