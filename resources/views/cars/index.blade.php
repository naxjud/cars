@extends('layout.master')

@section('inhalt')
  <div class="row">

    @foreach($cars as $car)
    <h1>Car {{ $car->id }}</h1>
    <ul>
      <li>Make: {{ $car->make }}</li>
      <li>Model: {{ $car->model }}</li>
      <li>Produced on: {{ $car->produced_on }}</li>
    </ul>
    @endforeach

<div class="form-group">


    <form method="POST" action="{{URL::to('/cars')}}" enctype="multipart/form-data" class="formcontroll">
      <fieldset>
        <label for="">make:</label> <input type="text" name="make" class="input-medium search-query"><br>
        <label for="">model:</label> <input type="text" name="model" class="input-medium search-query"><br>
        <label for="">Produced on: </label><input type="date" name="produced_on" value=""><br>
        <button type="submit" class="btn btn-primary">submit</button>
      </fieldset>
    </form>

    </div>
  </div>

@stop
