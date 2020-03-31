<div class='container'>
  <nav class='navbar navbar-collapsed-sm navbar-default' id='nav' role='navigation'>
    <div class='navbar-header'>
      <button class='navbar-toggle' data-target='.navbar-header-collapse' data-toggle='collapse' type='button'>
        <span class='sr-only'>Toggle navigation</span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>
      <a class='navbar-brand' href='{{ route('pages.index') }}'>
        <img alt="Jednotka" width="255" height="55" src="/images/logo.png" />
      </a>
    </div>
    <div class='collapse navbar-collapse navbar-header-collapse'>
      <ul class='nav navbar-nav navbar-right'>
        <li class="{{ active_menu(Route::currentRouteName(), 'pages.index') }}">
          <a href="{{ route('pages.index') }}">
            <span>
              {{ trans('navbar.home') }}
            </span>
          </a>
        </li>
        <li class="{{ active_menu(Route::currentRouteName(), 'pages.about') }}">
          <a href="{{ route('pages.about') }}">
            <span>
              {{ trans('navbar.about') }}
            </span>
          </a>
        </li>
        <li class="{{ active_menu(Route::currentRouteName(), 'pages.garage') }}">
          <a href="{{ route('pages.garage') }}">
            <span>
              {{ trans('navbar.garage') }}
            </span>
          </a>
        </li>
        <li class="{{ active_menu(Route::currentRouteName(), 'pages.commerce') }}">
          <a href="{{ route('pages.commerce') }}">
            <span>
              {{ trans('navbar.commerce') }}
            </span>
          </a>
        </li>
        <li class="{{ active_menu(Route::currentRouteName(), 'pages.contact') }}">
          <a href="{{ route('pages.contact') }}">
            <span>
              {{ trans('navbar.contact') }}
            </span>
          </a>
        </li>
        <li class="dropdown">
          <a class='dropdown-toggle' data-delay='50' data-hover='dropdown' data-toggle='dropdown' href='#'>
            <span style="display:flex; align-items: center">
                <img src="/images/flag/{{ LaravelLocalization::setLocale() }}.png" style="width: 25px; height: 25px; margin-right: 5px;" alt="">
              <i class='fa fa-angle-down'></i>
            </span>
          </a>
           <ul class='dropdown-menu' role='menu'>
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
              <li style="background-color: #163762;">
                  <a style="background-color: #163762;" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                      {{--{{ $properties['native'] }}--}}
                      {{ $localeCode }}
                  </a>
              </li>
            @endforeach
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</div>
