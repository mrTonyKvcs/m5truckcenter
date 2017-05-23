@extends('layouts.app')
@section('content')
<div id='main-content-header'>
  <div class='container'>
    <div class='row'>
      <div class='col-sm-12'>
        <h1 class='title'>
          {{ trans('navbar.products-services') }}
        </h1>
        <ol class='breadcrumb'>
          <li>
            <a href='{{ route('pages.index') }}'>
              <i class='fa fa-home'></i>
            </a>
          </li>
          <li class='active'>{{ trans('navbar.products-services') }}</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div id='main-content' style="padding-top: 0;">
	<div class="container">
		<div class='row'>
		  <div class='col-sm-12'>
		    <div class='page-header page-header-with-icon'>
		      <i class='fa fa-cloud'></i>
		      <h2>Szolgaltatásaink</h2>
		    </div>
		    <div class='text-boxes'>
		      <div class='row text-box'>
		        <div class='col-sm-6'><img class="img-responsive center-block" alt="Lorem ipsum dolor sit amet" width="340" height="188" src="/images/sm-alkatreszek_piros.png" /></div>
		        <div class='col-sm-6'>
		          <h3 class='title'><a href="#">Alkatrész kereskedés</a></h3>
		          <p>
			          Kecskemétről az M5-ös autópálya nyugati lehajtójánál található központi bázisunkról biztosítjuk Ügyfeleink részére az állandó kamion és pótkocsi alkatrész ellátást akár azonnali kiszállítással bárhova ahova Ügyfelünk kívánja, kérésre a nap 24 órájában rendelkezésre állunk, műszaki segítséget nyújtunk, maximálisan rugalmasan kezeljük az Ön kérését. Részletes kiszállítási információkért, egyénileg személyre szabott azonnali alkatrész árajánlatért keresse értékesítő kollégánkat most!
		          </p>
		        </div>
		      </div>
		      <hr>
		      <div class='row text-box'>
		        <div class='col-sm-6 col-sm-push-6'><img class="img-responsive center-block" alt="Praesent vitae adipiscing nunc" width="330" height="183" src="/images/sm-szerviz.png" /></div>
		        <div class='col-sm-6 col-sm-pull-6'>
		          <h3 class='title'><a href="#">Kamion szervíz</a></h3>
		          <p>
			          Nem kell kétségbe esnie ha munkaeszköze műszaki meghibásodás miatt nem tudja tovább folytatni fuvar feladatát. Magas szakképzettséggel és tapasztalattal rendelkező szerelő kollégáink a nap 24 órájában azonnali rendelkezésre állnak, hogy az időkiesést a lehető leghatékonyabb módszerekkel minimálisra csökkentsük. Bárhol, bármilyen körülmények közt műszaki mentést, helyszíni javítást végzünk, kereskedelmünk háttérkiszolgálásával úgy érkezünk a javítás helyszínére, hogy minden lehetséges meghibásodott alkatrész, szerszám, segédanyag kéznél legyen. Részletes javítási díjakért, egyénileg személyre szabott árajánlatért keresse értékesítő kollégánkat most!
		          </p>
		        </div>
		      </div>
		      <hr>
		      <div class='row text-box'>
		        <div class='col-sm-6'><img class="img-responsive center-block" alt="Lorem ipsum dolor sit amet" width="340" height="188" src="/images/sm-atiras.png" /></div>
		        <div class='col-sm-6'>
		          <h3 class='title'><a href="#">Átírás</a></h3>
		          <p>Nem kell többet várnia okmányirodákban! Központi irodánkban szakképzett kollégáink biztosítják mindennemű gépjármű:</p>
		          <div class="row">
		          	<div class="col-sm-6">
						<ul>
							<li>Átírásának</li>
							<li>Forgalomba helyezésének</li>
							<li>Vizsgáztatának</li>
						</ul>
		          	</div>
		          	<div class="col-sm-6">
		          		<ul>
							<li>Névre írásának</li>
							<li>Rendszámának</li>
							<li>Biztosításának</li>
						</ul>
		          	</div>
		          </div>
					<p>
						komplex, azonnali ügyintézését flották számára is! Szolgáltatásunk keretében töredékére csökken a gépjármű ügyintézéssel kapcsolatos utánajárásra eltöltött ideje! Részletes ügyintézési információkért, egyénileg személyre szabott árajánlatért keresse kollégánkat most!
					</p>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
        <div class='row'>
              <div class='col-sm-12'>
                <div class='page-header page-header-with-icon'>
                  <i class='fa fa-wrench'></i>
                  <h2>
                    Termékeink
                  </h2>
                </div>
                <div class='icon-boxes icon-boxes-lg'>
                  <div class='row'>
                    <div class='col-sm-6 icon-box'>
                      <div class='icon icon-wrap icon-circle icon-lg contrast-bg'>
                        <i class='fa fa-truck text-white'></i>
                      </div>
                      <div class='content'>
                        <h3 class='title'>Shipping</h3>
                        <p>Curabitur id ante at diam consectetur mattis. Donec tristique est turpis, et dapibus odio accumsan non. Donec rutrum sodales interdum.</p>
                      </div>
                    </div>
                    <div class='col-sm-6 icon-box'>
                      <div class='icon icon-wrap icon-circle icon-lg contrast-bg'>
                        <i class='fa fa-wrench text-white'></i>
                      </div>
                      <div class='content'>
                        <h3 class='title'>Technical support</h3>
                        <p>Nulla consectetur turpis a ante tristique feugiat. In venenatis pellentesque leo vehicula consequat. Maecenas elementum velit ut leo imperdiet vehicula.</p>
                      </div>
                    </div>
                  </div>
                  <div class='row'>
	            <div class='col-sm-6 icon-box'>
	              <div class='icon icon-wrap icon-circle icon-lg contrast-bg'>
	                <i class='fa fa-tag text-white'></i>
	              </div>
	              <div class='content'>
	                <h3 class='title'>Warranty</h3>
	                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed massa quis elit sagittis tempor. Ut rutrum sem vel augue rhoncus vestibulum.</p>
	              </div>
	            </div>
	            <div class='col-sm-6 icon-box'>
	              <div class='icon icon-wrap icon-circle icon-lg contrast-bg'>
	                <i class='fa fa-shield text-white'></i>
	              </div>
	              <div class='content'>
	                <h3 class='title'>Security</h3>
	                <p>Cras aliquam accumsan lorem, ac cursus orci molestie eget. Ut nec ultricies augue. Vestibulum lobortis enim felis, non semper arcu convallis at.</p>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	</div>
</div>
@stop