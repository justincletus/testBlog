@extends('frontviews.layouts.submaster')
@section('title', 'Services')

@section('content')
<div class="container-fluid text-center">
  <div class="row content userloginform">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-8 text-left">
      <div class="col-md-6">
        @if(Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
        @endif
      </div>
      <h3> {{ $title }} </h3>
      <div class="col-sm-8 col-sm-6 col-sm-4">
        <ul>
          @if(!empty($courses) && $courses->count())
          <?php foreach ($courses as $course): ?>
            <li><h3>Course Name : {{ $course->name}}</h3> </li>

          <?php endforeach; ?>
          @else
              <li>There are no data.</li>
          @endif
          {!! $courses->render() !!}
        </ul>
      </div>



    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>


@stop
