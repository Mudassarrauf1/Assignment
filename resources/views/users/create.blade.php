@extends('base')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Add a contact</h1>
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form method="post" action="{{ route('users.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="first_name">Full Name:</label>
                        <input type="text" class="form-control" name="name" required/>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" name="email" required/>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="password" required/>
                    </div>
                    <div class="form-group">
                        <label for="password">Confirm Password:</label>
                        <input type="password" class="form-control" name="password_confirmation" required/>
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <label for="file">Add Pic:</label>--}}
{{--                        <input type="file" class="form-control" name="avatar"/>--}}
{{--                    </div>--}}

                    <button type="submit" class="btn btn-primary-outline">Add</button>
                </form>
            </div>
        </div>
    </div>
@endsection
