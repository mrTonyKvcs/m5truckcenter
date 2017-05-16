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
        <img alt="Jednotka" width="117" height="39" src="/assets/images/logo.svg" />
      </a>
    </div>
    <div class='collapse navbar-collapse navbar-header-collapse'>
      <ul class='nav navbar-nav navbar-right'>
        <li class="active">
          <a href="{{ route('pages.index') }}">
            <span>
              {{ trans('navbar.home') }}
            </span>
          </a>
        </li>
        <li class="">
          <a href="{{ route('pages.about') }}">
            <span>
              {{ trans('navbar.about') }}
            </span>
          </a>
        </li>
        <li class="">
          <a href="">
            <span>
              {{ trans('navbar.products-services') }}
            </span>
          </a>
        </li>
        <li class="">
          <a href="">
            <span>
              {{ trans('navbar.tender') }}
            </span>
          </a>
        </li>
        <li class="">
          <a href="{{ route('pages.contact') }}">
            <span>
              {{ trans('navbar.contact') }}
            </span>
          </a>
        </li>
        <li class="dropdown">
          <a class='dropdown-toggle' data-delay='50' data-hover='dropdown' data-toggle='dropdown' href='#'>
            <span>
              {{ trans('navbar.language') }}
              <i class='fa fa-angle-down'></i>
            </span>
          </a>
           <ul class='dropdown-menu' role='menu'>
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
              <li>
                  <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                      {{ $properties['native'] }}
                  </a>
              </li>
            @endforeach
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</div>
