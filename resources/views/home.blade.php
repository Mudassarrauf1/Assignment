@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col-md-4">
                        <div class="d-flex" id="wrapper">

                            <!-- Sidebar -->
                            <div class="bg-light border-right" id="sidebar-wrapper">
                                <div class="sidebar-heading">Menu </div>
                                <div class="list-group list-group-flush">
                                    <a href="{{url('/home')}}" class="list-group-item list-group-item-action bg-light">Dashboard</a>
                                    <a href="{{url('/users')}}" class="list-group-item list-group-item-action bg-light">Users</a>

                                </div>
                            </div>
                            <!-- /#sidebar-wrapper -->
                        </div>
                    </div>
                    <div class="col-md-8">
                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
@endsection
