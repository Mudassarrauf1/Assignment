@extends('base')
@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Update a contact</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
            @endif
            <form method="post" action="{{ route('users.update', $user->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="first_name">Full Name:</label>
                    <input type="text" class="form-control" name="name" value={{ $user->name }}  required/>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" value={{ $user->email }}  required/>
                </div>
{{--                <div class="form-group">--}}
{{--                    <label for="file">Update Pic:</label>--}}
{{--                    <input type="file" class="form-control" name="avatar"/>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="city">City:</label>--}}
{{--                    <input type="text" class="form-control" name="city" value={{ $user->city }} />--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="country">Country:</label>--}}
{{--                    <input type="text" class="form-control" name="country" value={{ $user->country }} />--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="job_title">Job Title:</label>--}}
{{--                    <input type="text" class="form-control" name="job_title" value={{ $user->job_title }} />--}}
{{--                </div>--}}
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
