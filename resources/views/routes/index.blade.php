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
        <hr>
        @foreach ($routes as $route)
            <div class="row">
                <div class="well col-md-8">
                    <strong>ID</strong> :{{ $route->Method }}<br>
                    <strong>Route</strong> :{{ $route->Route }}<br>
                    <strong>Controller</strong> :{{ $route->Controller }}<br>
                    <strong>Action</strong> :{{ $route->Action }}<br>
                </div>
            </div>

        @endforeach
        <?php echo $routes->links(); ?>
    </div>
@endsection
