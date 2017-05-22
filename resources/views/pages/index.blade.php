@extends('layouts.app')
@section('content')
@include('partials.home.slider')
<div id='main-content'>
  <div class='container'>
    @include('partials.home.panels')
    {{-- @include('partials.home.features') --}}
  </div>
</div>
<div class='fade' id='scroll-to-top'>
  <i class='fa fa-chevron-up'></i>
</div> 
@stop