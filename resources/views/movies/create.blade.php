@extends('layouts.app')

@section ('content')
<!-- "<h1>Hello World create</h1>" -->
<h1>Add New Movie</h1>


  <form class="form-horizontal" method="post">
    <div class="form-group">
      <label class="col-xs-8" for="title">Enter Movie title:</label>
      <div class="">
        <div class="col-xs-8">
        <input class="form-conntrol" type="id="title" type="text" name="title">
        </div>
      </div>
      <div class="form-group">
        <label class="col-xs-8" for="title">Enter Release date</label>
        <div class="">
          <div class="col-xs-8">
          <input class="form-conntrol" type="id="title" type="text" name="title">
          </div>
        </div>

    </div>
    <div class="text-center">
      <button class="btn btn-default" type="submit" name="button"></button>

    </div>
  </div>
</form>
@endsection
