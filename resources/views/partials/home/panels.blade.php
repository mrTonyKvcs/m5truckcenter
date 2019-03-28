
<div class='panels-wrapper'>
  <div class='row panels' style="margin-top:20px;">
    <div class='col-sm-6 panel-item'>
      <a class='panel panel-image' href='{{ route('pages.commerce') }}'>
        <div class='panel-icon'>
          <i class='fa fa-wrench icon'></i>
        </div>
        <div class='panel-heading'><img class="img-responsive-sm" alt="M5 Truck Ceter Alkatrész kereskedelem" width="768" height="300" src="/images/bg-szerviz.png" /></div>
        <div class='panel-body'>
            <h3 class='panel-title'>{{ trans('home.first-panel') }}</h3> <br>
            <p>{!! trans('home.first-panel-text') !!}</p>
            <button class="panel__button">Részletek</button>
        </div>
      </a>
    </div>
    <div class='col-sm-6 panel-item'>
      <a class='panel panel-image' href='{{ route('pages.garage') }}'>
        <div class='panel-icon'>
          <i class='fa fa-shopping-cart icon'></i>
        </div>
        <div class='panel-heading'><img class="img-responsive-sm" alt="M5 Truck Ceter 0-24 kamion szervíz" width="768" height="300" src="/images/alkatreszek_piros.png" /></div>
        <div class='panel-body'>
            <h3 class='panel-title'>{{ trans('home.second-panel') }}</h3>
            <p>{!! trans('home.second-panel-text') !!}</p>
            <button class="panel__button">Részletek</button>
        </div>
      </a>
    </div>
  </div>
</div>
