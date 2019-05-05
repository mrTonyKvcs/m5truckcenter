@extends('layouts.app')
@section('content')
@include('partials.home.slider')
<div id='main-content' style="padding-top: 0;">
  <div class='container'>
        {{--<div class='page-header page-header-with-icon'>--}}
          {{--<i class='fa fa-info-circle'></i>--}}
          {{--<h2 style="color: #d10a11;">Cégünk szabadság miatt 2018.07.25 – 2018.08.02 napjáig zárva tart. </h2>--}}
          {{--<p style="font-size: 18px;">Zárás: 2018.07.24 17:00 óra--}}
{{--Nyitás: 2018.08.03 08:00 óra--}}
{{--</p>--}}
          {{--<p>--}}
{{--Ez időre telefonos elérhetőségünk is szünetel, amennyiben megkereséseiket elküldik az m5truckcenter@gmail.com címre, 08.03-án reggel feldolgozzuk őket és megkeressük Kedves Ügyfeleinket.--}}

{{--Köszönjük megértésüket!--}}

{{--</p>--}}
{{--<p> Tisztelettel, Ugrik Milán – cégvezető--}}

{{--M5 Truck Center Kft.--}}

{{--</p>--}}
{{--<p>(Halaszthatatlan ügyben ügyeleti telefonszám:--}}
{{--+36304349215 – Túri Márk)</p>--}}
        {{--</div>--}}
    <div class='page-header page-header-with-icon'>
        <i class='fa fa-cloud'></i>
        <h2>
            {{ trans('home.services') }}
        </h2>
    </div>
    @include('partials.home.panels')
    <div class='page-header page-header-with-icon'>
        <i class='fa fa-users'></i>
        <h2>{{ trans('home.services-title') }}</h2>
    </div>
    @include('partials.home.services')
    <div class="row" style="margin-top: 70px;">
        <div class="col-md-6 col-md-offset-3 text-center">
            <a href="{{ route('pages.contact') }}" class="btn btn-contrast btn-block form-contact-submit">{{ trans('home.service-button') }}</a>
        </div>
    </div>
    @include('partials.clients')
  </div>
</div>
<div class='fade' id='scroll-to-top'>
  <i class='fa fa-chevron-up'></i>
</div> 

@stop
