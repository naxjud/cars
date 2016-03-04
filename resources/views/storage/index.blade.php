@extends('layout.master')

@section('inhalt')
    <h1>Storage</h1>
    @foreach ($storage as $st)
        <div class="row">
            <div class="col-md-1 col-md-offset-1">
                ID::{{ $st->id }}
            </div>
            <div class="col-md-1">
                Building::{{ $st->building }}
            </div>
            <div class="col-md-1">
                Shelv::{{ $st->shelv }}
            </div>
            <div class="col-md-1">
                Shelv::{{ $st->level }}
            </div>
            <div class="col-md-1">
                Shelv::{{ $st->field }}
            </div>
        </div>

    @endforeach

<?php echo $storage->links(); ?>

@stop
