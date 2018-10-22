@extends('layouts.app')
@extends('navbar')
@extends('sidenavbar')
@section('content')

    <div class="container">

        <table class="table table-bordered table-striped table-hover ">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>


                {{-- <th class="text-center">Action</th> --}}
            </tr>
            </thead>
            <tbody>
            @foreach ($lecture  as $lectures)
                <tr>
                    <td>{{ $lectures->id }}</td>
                    <td>{{ $lectures->name }}</td>
                    <td>{{ $lectures->description }}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
        {{-- {{ $students->links() }} --}}
    </div>
@endsection