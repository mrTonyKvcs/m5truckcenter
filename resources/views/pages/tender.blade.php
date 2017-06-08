@extends('layouts.app')
@section('content')
<div id='main-content-header'>
  <div class='container'>
    <div class='row'>
      <div class='col-sm-12'>
        <h1 class='title'>
          {{ trans('navbar.tender') }}
        </h1>
        <ol class='breadcrumb'>
          <li>
            <a href='{{ route('pages.index') }}'>
              <i class='fa fa-home'></i>
            </a>
          </li>
          <li class='active'>{{ trans('navbar.tender') }}</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div id='main-content' style="padding-top: 0;">
  <div class="row">
    <div class='col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2'>
      <div class='page-header page-header-with-icon mt-70' style="margin-top: 70px;">
        <i class='fa fa-comments-o'></i>
        <h2>Miben segíthetünk?</h2>
        <small class="mt-30">Kollégáink a lehető leghamarabb telefonon vagy e-mailben felkeresik Önt. Amennyiben gyorsabban szeretne árajánlatot kapni hívjon minket telefonon!</small>
      </div>
      {{-- <form class='form form-validation form-contact' method='post'> --}}
      {!! Form::open(['route' => 'mail.tender', 'class' => 'form form-validation']) !!}
        <div class='row'>
          <div class='col-sm-12'>
            <div class='alert alert-success form-contact-success hidden'>Thanks! Your message has been successfully sent!</div>
            <div class='alert alert-danger form-contact-error hidden'>Ooops! There was an error sending your message.</div>
          </div>
        </div>
        <div class='row'>
          <div class='col-sm-6'>
            <div class='form-group control-group'>
              {{ Form::text('name', null, ['class' => 'form-control control-group', 'placeholder' => 'Név', 'type' => 'text']) }}
            </div>
          </div>
          <div class='col-sm-6'>
            <div class='form-group control-group'>
              {{ Form::text('phone', null, ['class' => 'form-control control-group', 'placeholder' => 'Telefonszám', 'type' => 'text']) }}
            </div>
          </div>
        </div>
         <div class='row'>
          <div class='col-sm-6'>
            <div class='form-group control-group'>
              {{ Form::text('email', null, ['class' => 'form-control control-group', 'placeholder' => 'Email', 'type' => 'email']) }}
            </div>
          </div>
          <div class='col-sm-6'>
            <div class='form-group control-group'>
              {{ Form::text('vehicle_type', null, ['class' => 'form-control control-group', 'placeholder' => 'Gépjármű típusa', 'type' => 'text']) }}
            </div>
          </div>
        </div>
         <div class='row'>
         <div class='col-sm-6'>
            <div class='form-group control-group'>
              {{ Form::text('chassis_number', null, ['class' => 'form-control control-group', 'placeholder' => 'Alvázszám', 'type' => 'text']) }}
            </div>
          </div>
          <div class='col-sm-6'>
            <div class='form-group control-group'>
              {{ Form::text('part', null, ['class' => 'form-control control-group', 'placeholder' => 'Keresett alkatrészek megnevezése', 'type' => 'text']) }}
            </div>
          </div>
        </div>
        <div class='row'>
          <div class='col-sm-12'>
            <div class='form-group control-group'>
              {{ Form::textarea('message', null, ['class' => 'form-control control-group', 'placeholder' => 'Megjegyzés', 'type' => 'text']) }}
            </div>
          </div>
        </div>
        <div class='row'>
          <div class='col-sm-12'>
            {{ Form::submit('Küldés', ['class' => 'btn btn-contrast btn-block form-contact-submit']) }}
          </div>
        </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@stop