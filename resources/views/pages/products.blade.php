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
		      <h2>{{ trans('home.services') }}</h2>
		    </div>
		    <div class='text-boxes'>
		      <div class='row text-box'>
		        <div class='col-sm-6'><img class="img-responsive center-block" alt="Lorem ipsum dolor sit amet" width="340" height="188" src="/images/sm-alkatreszek_piros.png" /></div>
		        <div class='col-sm-6'>
		          <h3 class='title'><a href="#">{{ trans('home.first-panel') }}</a></h3>
		          <p>
			          {{ trans('services-products.parts-trade-text') }}
		          </p>
		        </div>
		      </div>
		      <hr>
		      <div class='row text-box'>
		        <div class='col-sm-6 col-sm-push-6'><img class="img-responsive center-block" alt="Praesent vitae adipiscing nunc" width="330" height="183" src="/images/sm-szerviz.png" /></div>
		        <div class='col-sm-6 col-sm-pull-6'>
		          <h3 class='title'><a href="#">{{ trans('services-products.truck-service-title') }}</a></h3>
		          <p>
			          {{ trans('services-products.truck-service-text') }}
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
                    {{ trans('services-products.products') }}
                  </h2>
                </div>
	            <div class='row portfolio-boxes'>
	              <div class='carousel carousel-default slide carousel-auto' id='carousel-related-work'>
	                <div class='carousel-inner'>
	                  <div class='item active'>
	                    <div class='col-sm-3 portfolio-box'>
                      
                        <div class='image-link'>
                          <img class="img-responsive img-rounded center-block" alt="{{ trans('services-products.body-parts') }}" width="262" height="171" src="/images/products/karosszeria.jpg" />
                        </div>
                        <h3 class='title'>{{ trans('services-products.body-parts') }}</h3>
                    </div>
                    <div class='col-sm-3 portfolio-box'>
                        <div class='image-link'>
                          <img class="img-responsive img-rounded center-block" alt="{{ trans('services-products.lighting-systems') }}" width="262" height="171" src="/images/products/vilagitas.jpg" />
                        </div>
                        <h3 class='title'>{{ trans('services-products.lighting-systems') }}</h3>
                    </div>
                    <div class='col-sm-3 portfolio-box'>
                        <div class='image-link'>
                          <img class="img-responsive img-rounded center-block" alt="{{ trans('services-products.engine-components') }}" width="262" height="171" src="/images/products/motorikus_alkatreszek.jpg" />
                        </div>
                        <h3 class='title'>{{ trans('services-products.engine-components') }}</h3>
                    </div>
                    <div class='col-sm-3 portfolio-box'>
                        <div class='image-link'>
                          <img class="img-responsive img-rounded center-block" alt="{{ trans('services-products.exhaust-systems-and-components') }}" width="262" height="171" src="/images/products/kipufogo_rendszere_ es_ alkatreszei.jpg" />
                        </div>
                        <h3 class='title'>{{ trans('services-products.exhaust-systems-and-components') }}</h3>
                    </div>
                  </div>
                  <div class='item'>
                    <div class='col-sm-3 portfolio-box'>
                        <div class='image-link'>
                          <img class="img-responsive img-rounded center-block" alt="{{ trans('services-products.cooling-systems') }}" width="262" height="171" src="/images/products/hutorendszerek.jpg" />
                        </div>
                        <h3 class='title'>{{ trans('services-products.cooling-systems') }}</h3>
                    </div>
                    <div class='col-sm-3 portfolio-box'>
                        <div class='image-link'>
                          <img class="img-responsive img-rounded center-block" alt="{{ trans('services-products.clutch-and-gearbox-parts') }}" width="262" height="171" src="/images/products/kuplung_es_valto_alkatreszek.jpg" />
                        </div>
                        <h3 class='title'>{{ trans('services-products.clutch-and-gearbox-parts') }}</h3>
                    </div>
                    <div class='col-sm-3 portfolio-box'>
                        <div class='image-link'>
                          <img class="img-responsive img-rounded center-block" alt="{{ trans('services-products.cab-parts') }}" width="262" height="171" src="/images/products/vezetofulke_alkatreszek.jpg" />
                        </div>
                        <h3 class='title'>{{ trans('services-products.cab-parts') }}</h3>
                    </div>
                    <div class='col-sm-3 portfolio-box'>
                        <div class='image-link'>
                          <img class="img-responsive img-rounded center-block" alt="{{ trans('services-products.drive-and-chassis-components') }}" width="262" height="171" src="/images/products/meghajtas_es_futomu_alkatreszek.jpg" />
                        </div>
                        <h3 class='title'>{{ trans('services-products.drive-and-chassis-components') }}</h3>
                    </div>
                  </div>
                  <div class='item'>
                    <div class='col-sm-3 portfolio-box'>
                        <div class='image-link'>
                          <img class="img-responsive img-rounded center-block" alt="{{ trans('services-products.brake-systems') }}" width="262" height="171" src="/images/products/fekrendszerek.jpg" />
                        </div>
                        <h3 class='title'>{{ trans('services-products.brake-systems') }}</h3>
                    </div>
                    <div class='col-sm-3 portfolio-box'>
                        <div class='image-link'>
                          <img class="img-responsive img-rounded center-block" alt="{{ trans('services-products.pneumatic-valves') }}" width="262" height="171" src="/images/products/pneumatikus_szelepek.jpg" />
                        </div>
                        <h3 class='title'>{{ trans('services-products.pneumatic-valves') }}</h3>
                    </div>
                    <div class='col-sm-3 portfolio-box'>
                        <div class='image-link'>
                          <img class="img-responsive img-rounded center-block" alt="{{ trans('services-products.suspension-parts') }}" width="262" height="171" src="/images/products/felfuggesztes.jpg" />
                        </div>
                        <h3 class='title'>{{ trans('services-products.suspension-parts') }}</h3>
                    </div>
                    <div class='col-sm-3 portfolio-box'>
                        <div class='image-link'>
                          <img class="img-responsive img-rounded center-block" alt="{{ trans('services-products.steering-components') }}" width="262" height="171" src="/images/products/kormanyzas.jpg" />
                        </div>
                        <h3 class='title'>{{ trans('services-products.steering-components') }}</h3>
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