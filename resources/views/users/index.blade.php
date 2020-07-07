@extends('base')

@section('main')
    <div class="row">
        <div class="col-sm-12">

            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
        </div>
        <div>
{{--            <a style="margin: 19px;" href="{{ route('users.create')}}" class="btn btn-primary">New User</a>--}}
            <a href="{{ route('register') }}">Register New User</a>
        </div>
        <div class="col-sm-12">
            <h1 class="display-3">Users</h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
{{--                    <td>Job Title</td>--}}
{{--                    <td>City</td>--}}
{{--                    <td>Country</td>--}}
                    <td colspan = 2>Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($allUsers as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}} {{$user->name}}</td>
                        <td>{{$user->email}}</td>
{{--                        <td>{{$contact->job_title}}</td>--}}
{{--                        <td>{{$contact->city}}</td>--}}
{{--                        <td>{{$contact->country}}</td>--}}
                        <td>
                            <a href="{{ route('users.edit',$user->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('users.destroy', $user->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
            </div>
@endsection
