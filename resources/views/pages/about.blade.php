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
		            Vállakozásunk 2017 év elején indult Kecskeméten. Fő profilunk a kamion és pótkocsi alkatrész kis és nagykereskedelem. Több éves szakmai tudás, képzettség áll munkatársaink mögött, akik a nap 24 órájában azon dolgoznak hogy a megrendelések pontosan, precízen legyenek végrehajtva. Legyen szó bármilyen típusú, évjáratú, kivitelű tehergépjárműről vagy pótkocsiról, kollégáink azonnali árajánlatot adnak Önnek, rugalmas szállítási módjaink közül pedig Ön választhatja ki hogyan szeretne hozzájutni a kért alkatrészhez. Fontosnak tartjuk Ügyfeleink maximális kényelmét, tisztában vagyunk vele, hogy a meghibásodott alkatrészek azonnali pótlása rendkívül fontos, mindent megteszünk, hogy elégedett legyen szolgáltatásainkkal, beleértve az azonnali házhozszállítást, szakmai információk illetve tapasztalatok átadását. Minden vevői igényt megpróbálunk kielégíteni, amennyiben bármilyen kérése van, kollégáink készségesen állnak rendelkezésére. Országos illetve nemzetközi szállítói kapcsolatokkal rendelkezünk, nem ismerünk lehetetlent a problémák megoldásában. Készletünk folyamatos bővítése mellett, azonnal beszerezzük a kért alkatrészt amennyiben nincs raktárkészleten, beszállítói hálózatunk a legkorszerűbb logisztikával rendelkezik. Keresse kollégáinkat bizalommal!
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
                  <a class='image-link' data-lightbox data-lightbox-gallery='team' href='http://placehold.it/800x800&amp;text=Big+image' title='David Doe'>
                    <i class='fa fa-envelope'></i>
                    <img alt="David Doe" width="165" height="165" src="http://placehold.it/165x165" />
                  </a>
                </div>
                <div class='col-sm-8'>
                  <h3 class='name'>Ugrik Milán</h3>
                  <h4 class='position'>Cégvezető</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dictum varius ipsum,</p>
                  <div class='links'>
                    <a class='btn btn-medium-light btn-sm btn-circle' href='#'>
                      <i class='fa fa-twitter'></i>
                    </a>
                    <a class='btn btn-medium-light btn-sm btn-circle' href='#'>
                      <i class='fa fa-google-plus'></i>
                    </a>
                    <a class='btn btn-medium-light btn-sm btn-circle' href='#'>
                      <i class='fa fa-facebook'></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class='col-sm-6 profile-box'>
              <div class='row'>
                <div class='col-sm-4'>
                  <a class='image-link' data-lightbox data-lightbox-gallery='team' href='http://placehold.it/800x800&amp;text=Big+image' title='Jane Doe'>
                    <i class='fa fa-heart-o'></i>
                    <img alt="Jane Doe" width="165" height="165" src="http://placehold.it/165x165" />
                  </a>
                </div>
                <div class='col-sm-8'>
                  <h3 class='name'>Jane Doe</h3>
                  <h4 class='position'>Webdesigner</h4>
                  <p>Praesent eu placerat enim, vitae condimentum arcu. Aenean ac semper purus.</p>
                  <div class='links'>
                    <a class='btn btn-medium-light btn-sm btn-circle' href='#'>
                      <i class='fa fa-twitter'></i>
                    </a>
                    <a class='btn btn-medium-light btn-sm btn-circle' href='#'>
                      <i class='fa fa-dribbble'></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class='row'>
            <div class='col-sm-6 profile-box'>
              <div class='row'>
                <div class='col-sm-4'>
                  <a class='image-link' data-lightbox data-lightbox-gallery='team' href='http://placehold.it/800x800&amp;text=Big+image' title='John Doe'>
                    <i class='fa fa-camera-retro'></i>
                    <img alt="John Doe" width="165" height="165" src="http://placehold.it/165x165" />
                  </a>
                </div>
                <div class='col-sm-8'>
                  <h3 class='name'>John Doe</h3>
                  <h4 class='position'>SEO specialist</h4>
                  <p>Ut et quam at orci eleifend laoreet. Duis in eros eu purus pulvinar fermentum.</p>
                  <div class='links'>
                    <a class='btn btn-medium-light btn-sm btn-circle' href='#'>
                      <i class='fa fa-twitter'></i>
                    </a>
                    <a class='btn btn-medium-light btn-sm btn-circle' href='#'>
                      <i class='fa fa-skype'></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class='col-sm-6 profile-box'>
              <div class='row'>
                <div class='col-sm-4'>
                  <a class='image-link' data-lightbox data-lightbox-gallery='team' href='http://placehold.it/800x800&amp;text=Big+image' title='Jessica Doe'>
                    <i class='fa fa-camera-retro'></i>
                    <img alt="Jessica Doe" width="165" height="165" src="http://placehold.it/165x165" />
                  </a>
                </div>
                <div class='col-sm-8'>
                  <h3 class='name'>Jessica Doe</h3>
                  <h4 class='position'>Programmer</h4>
                  <p>Vivamus et malesuada leo. Duis iaculis in ipsum at tempor. Ut rutrum dolor quis du.</p>
                  <div class='links'>
                    <a class='btn btn-medium-light btn-sm btn-circle' href='#'>
                      <i class='fa fa-twitter'></i>
                    </a>
                    <a class='btn btn-medium-light btn-sm btn-circle' href='#'>
                      <i class='fa fa-github'></i>
                    </a>
                    <a class='btn btn-medium-light btn-sm btn-circle' href='#'>
                      <i class='fa fa-facebook'></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class='fade' id='scroll-to-top'>
  <i class='fa fa-chevron-up'></i>
</div>
@stop