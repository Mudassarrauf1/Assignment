<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Assigment</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
    <div class="col-md-12">


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
    @yield('main')
    </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>
