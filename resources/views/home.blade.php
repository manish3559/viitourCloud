@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    You are logged in!

                    {{-- <a href="{{ url('index/add/0') }}" target="_blank">Add User</a> --}}
                    <table border="2">

                            <tr>
                                <td>First Name</td>
                                <td>Last Name</td>
                                <td>Email</td>
                                <td>Date Of Birth</td>
                                <td>Action</td>
                            </tr>

                            @foreach($data as $all)
                            <tr>
                                <td>{{ $all->first_name }}</td>
                                <td>{{ $all->first_name }}</td>
                                <td>{{ $all->email }}</td>
                                <td>{{ $all->dob }}</td>
                                <td> <a target="_blank" href="index/add/{{ $all->id }}"> Edit</a>

                                </td>
                            </tr>
                            @endforeach
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
