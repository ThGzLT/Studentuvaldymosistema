@extends('layouts.app')


    <div class="container">
        <table class="table table-bordered table-striped table-hover ">
            <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>

            </tr>
            </thead>
            <tbody>
            @foreach ($students  as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td class="text-center"><a class="btn btn-raised btn-primary btn-sm" href="{{ route('studentview',$student->id) }}">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>placiau</a>
                    </td>
                    <td class="text-center"><a class="btn btn-raised btn-primary btn-sm" href="{{ url('student/'.$student->id) }}">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>pazymiai</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>




    </div>
