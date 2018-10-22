@extends('layouts.app')


<div class="container">
    <table class="table table-bordered table-striped table-hover ">
        <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $students->first_name }}</td>
            <td>{{ $students->last_name }}</td>
            <td>{{ $students->email }}</td>
            <td>{{ $students->phone }}</td>
            </td>
        </tr>

        </tbody>
    </table>

</div>