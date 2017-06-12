<div class='panels-wrapper'>
  <div class='row panels'>
    <div class='col-sm-4 panel-item'>
      <a class='panel panel-image' href='{{ route('pages.products') }}'>
        <div class='panel-icon'>
          <i class='fa fa-truck icon'></i>
        </div>
        <div class='panel-heading'><img class="img-responsive-sm" alt="Project planning" width="768" height="300" src="/images/alkatreszek_piros.png" /></div>
        <div class='panel-body'>
          <h3 class='panel-title'>{{ trans('home.first-panel') }}</h3>
          <p>{{ trans('home.first-panel-text') }}</p>
        </div>
      </a>
    </div>
    <div class='col-sm-4 panel-item'>
      <a class='panel panel-image' href='{{ route('pages.products') }}'>
        <div class='panel-icon'>
          <i class='fa fa-wrench icon'></i>
        </div>
        <div class='panel-heading'><img class="img-responsive-sm" alt="Easy customizable" width="768" height="300" src="/images/bg-szerviz.png" /></div>
        <div class='panel-body'>
          <h3 class='panel-title'>{{ trans('home.second-panel') }}</h3>
          <p>{{ trans('home.second-panel-text') }}</p>
        </div>
      </a>
    </div>
    <div class='col-sm-4 panel-item'>
      <a class='panel panel-image' href='{{ route('pages.tender') }}'>
        <div class='panel-icon'>
          <i class='fa fa-comments icon'></i>
        </div>
        <div class='panel-heading'><img class="img-responsive-sm" alt="Fastest workers" width="768" height="300" src="/images/bg-atiras.png" /></div>
        <div class='panel-body'>
          <h3 class='panel-title'>{{ trans('home.third-panel') }}</h3>
          <p>{{ trans('home.third-panel-text') }}</p>
        </div>
      </a>
    </div>
  </div>
</div>