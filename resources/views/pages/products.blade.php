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
	            <div class='row portfolio-boxes'>
	              <div class='carousel carousel-default slide carousel-auto' id='carousel-related-work'>
	                <div class='carousel-inner'>
	                  <div class='item active'>
	                    <div class='col-sm-3 portfolio-box'>
                      
                        <div class='image-link'>
                          <img class="img-responsive img-rounded center-block" alt="Etiam vestibulum" width="262" height="171" src="/images/products/karosszeria.jpg" />
                        </div>
                        <h3 class='title'>Karosszéria</h3>
                    </div>
                    <div class='col-sm-3 portfolio-box'>
                        <div class='image-link'>
                          <img class="img-responsive img-rounded center-block" alt="Malesuada" width="262" height="171" src="/images/products/vilagitas.jpg" />
                        </div>
                        <h3 class='title'>Világítás</h3>
                    </div>
                    <div class='col-sm-3 portfolio-box'>
                        <div class='image-link'>
                          <img class="img-responsive img-rounded center-block" alt="Dictum vulputate" width="262" height="171" src="/images/products/motorikus_alkatreszek.jpg" />
                        </div>
                        <h3 class='title'>Motorikus alkatrészek</h3>
                    </div>
                    <div class='col-sm-3 portfolio-box'>
                        <div class='image-link'>
                          <img class="img-responsive img-rounded center-block" alt="Dictum vulputate" width="262" height="171" src="/images/products/kipufogo_rendszere_ es_ alkatreszei.jpg" />
                        </div>
                        <h3 class='title'>Kipufogó rendszerek és alkatrészei</h3>
                    </div>
                  </div>
                  <div class='item'>
                    <div class='col-sm-3 portfolio-box'>
                        <div class='image-link'>
                          <img class="img-responsive img-rounded center-block" alt="Malesuada" width="262" height="171" src="/images/products/hutorendszerek.jpg" />
                        </div>
                        <h3 class='title'>Hűtőrendszerek</h3>
                    </div>
                    <div class='col-sm-3 portfolio-box'>
                        <div class='image-link'>
                          <img class="img-responsive img-rounded center-block" alt="Malesuada" width="262" height="171" src="/images/products/kuplung_es_valto_alkatreszek.jpg" />
                        </div>
                        <h3 class='title'>Kuplung és váltó alkatrészek</h3>
                    </div>
                    <div class='col-sm-3 portfolio-box'>
                        <div class='image-link'>
                          <img class="img-responsive img-rounded center-block" alt="Cullamcorper" width="262" height="171" src="/images/products/vezetofulke_alkatreszek.jpg" />
                        </div>
                        <h3 class='title'>Vezetőfülke alkatrészek</h3>
                    </div>
                    <div class='col-sm-3 portfolio-box'>
                        <div class='image-link'>
                          <img class="img-responsive img-rounded center-block" alt="Etiam posuere" width="262" height="171" src="/images/products/meghajtas_es_futomu_alkatreszek.jpg" />
                        </div>
                        <h3 class='title'>Meghajtás és futómű alkatrészek</h3>
                    </div>
                  </div>
                  <div class='item'>
                    <div class='col-sm-3 portfolio-box'>
                        <div class='image-link'>
                          <img class="img-responsive img-rounded center-block" alt="Malesuada" width="262" height="171" src="/images/products/fekrendszerek.jpg" />
                        </div>
                        <h3 class='title'>Fékrendszerek</h3>
                    </div>
                    <div class='col-sm-3 portfolio-box'>
                        <div class='image-link'>
                          <img class="img-responsive img-rounded center-block" alt="Malesuada" width="262" height="171" src="/images/products/pneumatikus_szelepek.jpg" />
                        </div>
                        <h3 class='title'>Pneumatikus szelepek</h3>
                    </div>
                    <div class='col-sm-3 portfolio-box'>
                        <div class='image-link'>
                          <img class="img-responsive img-rounded center-block" alt="Cullamcorper" width="262" height="171" src="/images/products/felfuggesztes.jpg" />
                        </div>
                        <h3 class='title'>Felfüggesztés</h3>
                    </div>
                    <div class='col-sm-3 portfolio-box'>
                        <div class='image-link'>
                          <img class="img-responsive img-rounded center-block" alt="Etiam posuere" width="262" height="171" src="/images/products/kormanyzas.jpg" />
                        </div>
                        <h3 class='title'>Kormányzás</h3>
                    </div>
                  </div>
                </div>
                <ol class='carousel-indicators'>
                  <li class='active' data-slide-to='0' data-target='#carousel-related-work'></li>
                  <li data-slide-to='1' data-target='#carousel-related-work'></li>
                  <li data-slide-to='2' data-target='#carousel-related-work'></li>
                </ol>
              </div>
            </div>
	      </div>
	    </div>
	</div>
</div>
@stop