@extends('layouts.app')

@section('title', 'Non-Stop Kamion és pótkocsi szerviz Kecskeméten')

@section('description')
    <meta name='description' content='Elromlott kamionját, pótkocsiját 0-24 h-ban, azonnali indulással az út szélén megjavítjuk. Hívja kamion és pótkocsi szervizünket a +36308504403-as számon!'>
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
              <h3 class="c-header__subtitle">Non-stop kamion és pótkocsi szervizszolgáltatásunkhoz hívja az alábbi számot vagy kérjen ajánlatot!</h3>
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
                        <p class='lead lead-md text-left'>Nem kell kétségbe esnie, ha munkaeszköze műszaki meghibásodás miatt nem tudja tovább folytatni fuvar feladatát. Magas szakképzettséggel és tapasztalattal rendelkező kamion és pótkocsi szervizes kollégáink a nap 24 órájában azonnali rendelkezésre állnak, hogy az időkiesést a lehető leghatékonyabb módszerekkel minimálisra csökkentsük.</p>
                        <p class='lead lead-md text-left'>Bárhol, bármilyen körülmények közt műszaki mentést, helyszíni javítást végzünk, kereskedelmünk háttérkiszolgálásával úgy érkezünk a javítás helyszínére, hogy minden lehetséges meghibásodott alkatrész, szerszám, segédanyag kéznél legyen.
</p>
                        <p class='lead lead-md text-left'>
                            <strong>Részletes javítási díjakért, egyénileg személyre szabott árajánlatért keresse értékesítő kollégánkat a <a href="tel:+36308504403">+36308504403</a>-as számon, most!</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class='page-header page-header-with-icon' style="margin-top:50px;">
                    <i class='fa fa-wrench'></i>
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
                        <div class='col-sm-4 icon-box c-services__item' style="margin-bottom:0;">
                            <div class='icon icon-wrap icon-circle icon-lg contrast-bg' style="margin-right:0;">
                                <i class='fa fa-truck text-white'></i>
                            </div>
                            <div class='content'>
                                <h3 class='title' style="margin-top:17px;">Kamion szerviz</h3>
                            </div>
                        </div>
                        <div class='col-sm-4 icon-box c-services__item'>
                            <div class='icon icon-wrap icon-circle icon-lg contrast-bg' style="margin-right:0;">
                                <i class='fa fa-wrench text-white'></i>
                            </div>
                            <div class='content'>
                                <h3 class='title' style="margin-top:17px;">Pótkocsi szerviz</h3>
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
