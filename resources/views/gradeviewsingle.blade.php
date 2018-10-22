@extends('layouts.app')



<div class="container">

    <table class="table table-bordered table-striped table-hover ">
        <thead>
        <tr>
            <th>ID</th>
            <th>student_id</th>
            <th>lecture_id</th>
            <th>grade</th>

            {{-- <th class="text-center">Action</th> --}}
        </tr>
        </thead>
        <tbody>
 
            <tr>
                <td>{{ $grades->id }}</td>
                <td>{{ $grades->student_id }}</td>
                <td>{{ $grades->lecture_id }}</td>
                <td>{{ $grades->grade }}</td>
            </tr>
     
        </tbody>
    </table>
    {{-- {{ $students->links() }} --}}
</div>
