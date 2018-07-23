
<div class='panels-wrapper'>
  <div class='row panels'>
    <div class='col-sm-4 panel-item'>
      <a class='panel panel-image' href='{{ route('pages.products') }}'>
        <div class='panel-icon'>
          <i class='fa fa-truck icon'></i>
        </div>
        <div class='panel-heading'><img class="img-responsive-sm" alt="M5 Truck Ceter Alkatrész kereskedelem" width="768" height="300" src="/images/alkatreszek_piros.png" /></div>
        <div class='panel-body'>
          <h3 class='panel-title'>{{ trans('home.first-panel') }}</h3>
          <p>{{ trans('home.first-panel-text') }}</p>
        </div>
      </a>
    </div>
    <div class='col-sm-4 panel-item'>
      <a class='panel panel-image' href='{{ route('sales.index') }}'>
        <div class='panel-icon'>
          <i class='fa fa-comments icon'></i>
        </div>
        <div class='panel-heading'><img class="img-responsive-sm" alt="M5 Truck Ceter" width="768" height="300" src="/images/sale.png" /></div>
        <div class='panel-body'>
          <h3 class='panel-title'>{{ trans('navbar.sale') }}</h3>
          <p>{{ trans('home.third-panel-text') }}</p>
        </div>
      </a>
    </div>
    <div class='col-sm-4 panel-item'>
      <a class='panel panel-image' href='{{ route('pages.contact') }}'>
        <div class='panel-icon'>
          <i class='fa fa-phone icon'></i>
        </div>
        <div class='panel-heading'><img class="img-responsive-sm" alt="M5 Truck Ceter 0-24 kamion szervíz" width="768" height="300" src="/images/bg-szerviz.png" /></div>
        <div class='panel-body'>
          <h3 class='panel-title'>{{ trans('navbar.contact') }}</h3>
          <p>{{ trans('home.second-panel-text') }}</p>
        </div>
      </a>
    </div>
  </div>
</div>
