@extends('layouts.app')
@section('content')
    <div id='main-content-header'>
        <div class='container'>
            <div class='row'>
                <div class='col-sm-12'>
                    <h1 class='title'>
                        {{ trans('navbar.sale') }}
                    </h1>
                    <ol class='breadcrumb'>
                        <li>
                            <a href='{{ route('pages.index') }}'>
                                <i class='fa fa-home'></i>
                            </a>
                        </li>
                        <li class='active'>{{ trans('navbar.sale') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div id='main-content' style="padding-top: 0;">
        <div class="container">
            <div class="row">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="col-sm-12">
                    <div class='page-header page-header-with-icon'>
                        <i class='fa fa-bolt'></i>
                    </div>
                    <div class='text-boxes'>
                        <div class='row text-box'>
                            <div class='col-sm-6'><img class="img-responsive center-block" alt="Lorem ipsum dolor sit amet" width="340" height="188" src="/images/sales/sticker-sale.png" /></div>
                            <div class='sale col-sm-6'>
                                <h3 class='title'>AKCIÓ!
                                </h3>
                                <p>
                                Minden Kedves meglévő és leendő Ügyfelünk aki kamionján vagy pótkocsiján elhelyez egy 30x30 cm-es ontapadós vinyl matricát cégünk logójával, egyszeri 3000ft-os levásárolható egyenleget kap! Minden felhelyezett matrica után érvényes az akció!</p>
                                <p>Mi büszkék vagyunk Partnereinkre, ha elégedett velünk legyen Ön is az!
                                Célunk az, hogy Ügyfeleinknek az alkatrész beszerzés ne jelentsen többé gondot!
                                </p>
                                <button type="button" class="sale-btn" data-toggle="modal" data-target="#myModal">Feliratkozás az akcióra</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.modal')
        @include('partials.clients')
    </div>

@endsection
