@extends('layouts.app')

@section('title', trans('meta-tags.garage-title'))

@section('description')
    <meta name='description' content='{{trans('meta-tags.garage-description')}}'>
@endsection

@section('content')
<div id='main-content-header' class="bg-garage">
  <div class='container'>
    <div class='row'>
      <div class='col-sm-12'>
          <div class="c-header c-header__content c-header__content--subpage">
              <h1 class='title'>
                  {{ trans('navbar.garage') }}
              </h1>
              <h3 class="c-header__subtitle">{{ trans('garage.subtitle') }}</h3>
              <a href="tel:+36308504403" class="c-header__phone">+36308504403</a><br>
              <a href="{{ route('pages.contact') }}" class="btn btn-contrast form-contact-submit text-center c-header__button">{{ trans('home.service-button') }}</a>
          </div>
      </div>
    </div>
  </div>
</div>
<div id='main-content' style="padding-top: 0;">
	<div class="container">
        <div class='row' style="margin-top: 50px;">
            <div class='col-sm-12'>
                <div class='row'>
                    <div class='col-sm-12'>{!! trans('garage.content') !!}</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class='page-header page-header-with-icon' style="margin-top:50px;">
                    <i class='fa fa-wrench'></i>
                    <h2>
                        {{ trans('home.services') }}
                    </h2>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-sm-12'>
                <div class='icon-boxes icon-boxes-lg' style="padding-top: 25px;">
                    <div class='row c-services'>
                        <div class='col-sm-4 icon-box c-services__item' style="margin-bottom:0;">
                            <div class='icon icon-wrap icon-circle icon-lg contrast-bg' style="margin-right:0;">
                                <i class='fa fa-truck text-white'></i>
                            </div>
                            <div class='content'>
                                <h3 class='title' style="margin-top:17px;">{{ trans('garage.services-first') }}</h3>
                            </div>
                        </div>
                        <div class='col-sm-4 icon-box c-services__item'>
                            <div class='icon icon-wrap icon-circle icon-lg contrast-bg' style="margin-right:0;">
                                <i class='fa fa-wrench text-white'></i>
                            </div>
                            <div class='content'>
                                <h3 class='title' style="margin-top:17px;">{{ trans('garage.services-second') }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 70px;">
            <div class="col-md-12 text-center">
                <a href="{{ route('pages.contact') }}" class="btn btn-contrast btn-block form-contact-submit">{{ trans('home.service-button') }}</a>
            </div>
        </div>
	</div>
	 @include('partials.clients')
</div>
@stop
