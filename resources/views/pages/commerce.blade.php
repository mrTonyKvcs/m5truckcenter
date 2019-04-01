@extends('layouts.app')
@section('title', 'Kamion és pótkocsi alkatrész kereskedelem Kecskeméten')

@section('description')
    <meta name='description' content='Kamion és pótkocsi alkatrészét azonnal raktárról vagy 3 órán belül átadjuk vagy kiszállítjuk. Hívja kamion és pótkocsi alkatrész szaküzletünket a +36308504403-as számon!'>
@endsection

@section('content')
<div id='main-content-header' class="bg-commerce">
  <div class='container'>
    <div class='row'>
      <div class='col-sm-12'>
          <div class="c-header c-header__content c-header__content--subpage">
              <h1 class='title'>
                  {{ trans('navbar.commerce') }}
              </h1>
              <h3 class="c-header__subtitle">Kamion, illetve pótkocsi alkatrész a lehető legjobb áron! Hívja az alábbi számot vagy kérjen ajánlatot!</h3>
              <a href="tel:+36308504403" class="c-header__phone">+36308504403</a><br>
              <a href="{{ route('pages.contact') }}" class="btn btn-contrast form-contact-submit text-center c-header__button">Ajánlatkérés</a>
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
                    <div class='col-sm-12'>
                        <p class='lead lead-md text-left'>Kecskemétről az M5-ös autópálya nyugati lehajtójánál található központi bázisunkról biztosítjuk Ügyfeleink részére az állandó kamion és pótkocsi alkatrész ellátást akár azonnali kiszállítással bárhova, ahova Ügyfelünk kívánja. Kérésre a nap 24 órájában rendelkezésre állunk, műszaki segítséget nyújtunk, maximálisan rugalmasan kezeljük az Ön kérését. Ráadásul a kamion és pótkocsi alkatrészeket nálunk a lehető legjobb áron szerezheti meg.</p>
                        <p class='lead lead-md text-left'>Alkatrészeinkre 12 hónap jótállást vállalunk, garanciális probléma esetén azonnal vizsgáljuk a problémát központi raktárunkban és Ügyfeleink részére egy esetleges problémát a legkedvezőbb módon bírálunk el.</p>
                        <p class='lead lead-md text-left'>
                            <strong>Részletes kiszállítási információkért, egyénileg személyre szabott azonnali alkatrész árajánlatért keresse értékesítő kollégánkat most a <a href="tel:+36308504403">+36308504403</a> -as számon, most!</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class='page-header page-header-with-icon' style="margin-top:50px;">
                    <i class='fa fa-shopping-cart'></i>
                    <h2>
                        Szolgáltatásaink
                    </h2>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-sm-12'>
                <div class='icon-boxes icon-boxes-lg' style="padding-top: 25px;">
                    <div class='row c-services'>
                        <div class='col-sm-4 icon-box c-services__item'>
                            <div class='icon icon-wrap icon-circle icon-lg contrast-bg' style="margin-right:0;">
                                <i class='fa fa-truck text-white'></i>
                            </div>
                            <div class='content'>
                                <h3 class='title' style="margin-top: 15px;">Kamion alkatrész kereskedelem</h3>
                            </div>
                        </div>
                        <div class='col-sm-4 icon-box c-services__item'>
                            <div class='icon icon-wrap icon-circle icon-lg contrast-bg' style="margin-right:0;">
                                <i class='fa fa-wrench text-white'></i>
                            </div>
                            <div class='content'>
                                <h3 class='title' style="margin-top: 15px;">Pótkocsi alkatrész kereskedelem</h3>
                            </div>
                        </div>
                        <div class='col-sm-4 icon-box c-services__item'>
                            <div class='icon icon-wrap icon-circle icon-lg contrast-bg' style="margin-right:0;">
                                <i class='fa fa-clock-o text-white'></i>
                            </div>
                            <div class='content'>
                                <h3 class='title' style="margin-top: 15px;">Kamion és pótkocsi alkatrész kiszállítás</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 70px;">
            <div class="col-md-12 text-center">
                <a href="{{ route('pages.contact') }}" class="btn btn-contrast btn-block form-contact-submit">Elérhetőségeink / Ajánlatkérés</a>
            </div>
        </div>
	</div>
	 @include('partials.clients')
</div>
@stop
