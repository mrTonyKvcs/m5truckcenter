@extends('layouts.app')
@section('content')
    <div id='main-content-header'>
        <div class='container'>
            <div class='row'>
                <div class='col-sm-12'>
                    <h1 class='title'>
                        {{ trans('about.title') }}
                    </h1>
                    <ol class='breadcrumb'>
                        <li>
                            <a href='{{ route('pages.index') }}'>
                                <i class='fa fa-home'></i>
                            </a>
                        </li>
                        <li class='active'>{{ trans('about.title') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div id='main-content'>
        <div class='container'>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='page-header page-header-with-icon no-mg-t'>
                        <i class='fa fa-tag'></i>
                        <h2>
                            {{ trans('about.who') }}
                        </h2>
                    </div>
                    <div class='row'>
                        <div class='col-sm-12'>
                            <p class='lead lead-md text-left'>
                            {{ trans('about.text') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='page-header page-header-with-icon'>
                        <i class='fa fa-group'></i>
                        <h2>
                            {{ trans('about.team') }}
                        </h2>
                    </div>
                    <div class='profile-boxes'>
                        <div class='row'>
                            <div class='col-sm-6 profile-box'>
                                <div class='row'>
                                    <div class='col-sm-4'>
                                        <img alt="{{ trans('about.manager-name') }}" width="165" height="165" src="http://placehold.it/165x165" />
                                    </div>
                                    <div class='col-sm-8'>
                                        <h3 class='name'>{{ trans('about.manager-name') }}</h3>
                                        <h4 class='position'>{{ trans('about.manager') }}</h4>
                                        <p>{{ trans('about.manager-text') }}</p>
                                        <a href="tel:+36308504403"><i class="fa fa-mobile fa-fw" aria-hidden="true"></i> +36308504403</a>
                                    </div>
                                </div>
                            </div>
                            <div class='col-sm-6 profile-box'>
                                <div class='row'>
                                    <div class='col-sm-4'>
                                        <img alt="{{ trans('about.service-manager-name') }}" width="165" height="165" src="http://placehold.it/165x165" />
                                    </div>
                                    <div class='col-sm-8'>
                                        <h3 class='name'>{{ trans('about.service-manager-name') }}</h3>
                                        <h4 class='position'>{{ trans('about.service-manager') }}</h4>
                                        <p>{{ trans('about.service-manager-text') }}</p>
                                        <a href="tel:+36304349215"><i class="fa fa-mobile fa-fw" aria-hidden="true"></i> +36304349215</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.clients')
    </div>
    <div class='fade' id='scroll-to-top'>
        <i class='fa fa-chevron-up'></i>
    </div>
@stop
