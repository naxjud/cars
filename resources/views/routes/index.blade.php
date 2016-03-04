@extends('layout.master')

@section('inhalt')
    <div class="container">
        <div class="container">
            <form  action="" method="post">
                <div class="form-group">
                   <div class="col-xs-8">
                       <input type="text" class="form-control" name="croute" placeholder="welche Route?">
                   </div>
                </div>
                <div class="form-group">
                   <div class="col-xs-2">
                       <button type="submit" class="btn btn-primary" name="search">Search</button>
                   </div>
                </div>
            </form>
        </div>

        @foreach ($routes as $route)
            <div class="row">
                <div class="well">
                    <h4>ID</h4>{{ $route->Method }}<br>
                    <h4>Route</h4>{{ $route->Route }}<br>
                    <h4>Controller</h4>{{ $route->Controller }}<br>
                    <h4>Action</h4>{{ $route->Action }}<br>
                </div>
            </div>

        @endforeach

    </div>
@endsection
