<div id='footer-main'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-3 col-sm-6 info-box'>
        <div class='logo-container'>
          <img alt="Jednotka" width="255" height="55" src="/images/logo.png" />
        </div>
        <p class='no-mg-b'>{{ trans('home.footer-text') }}</p>
      </div>
      <div class='col-md-3 col-sm-6 info-box'>
        <h2 class='title'>{{ trans('navbar.sitemap') }}</h2>
        <p><a href="{{ route('pages.garage') }}">{{ trans('navbar.garage') }}</a></p>
        <p><a href="{{ route('pages.commerce') }}">{{ trans('navbar.commerce') }}</a></p>
        <p><a href="{{ route('pages.contact') }}">{{ trans('navbar.contact') }}</a></p>
      </div>
      <div class='col-md-3 col-sm-6 info-box'>
        <h2 class='title'>{{ trans('navbar.contact') }}</h2>
        <div class='icon-boxes'>
          <div class='icon-box'>
            <div class='icon icon-wrap'>
              <i class='fa fa-map-marker'></i>
            </div>
            <div class='content'>
              6000 Kecskemét,
              <br>
              Felsőcsalános 65.
            </div>
          </div>
          <div class='icon-box'>
            <div class='icon icon-wrap'>
              <i class='fa fa-phone'></i>
            </div>
            <div class='content'>
              <a href='tel:+36308504403'>+36308504403</a>
            </div>
          </div>
          <div class='icon-box'>
            <div class='icon icon-wrap'>
              <i class='fa fa-envelope'></i>
            </div>
            <div class='content'>
                <a href=" truckservicekecskemet@gmailcom">truckservicekecskemet@gmail.com</a>
            </div>
          </div>
        </div>
      </div>
      <div class='col-md-3 col-sm-6 info-box social-box'>
        <h2 class='title'>{{ trans('contact.hours') }}</h2>
        <div class='icon-boxes'>
          <div class='icon-box'>
            <div class='icon icon-wrap'>
              <i class='fa fa-clock-o text-contrast'></i>
            </div>
            <div class='content'>
              <p>
                H - P: 00:00 - 24:00
              </p>
            </div>
          </div>
          <div class='icon-box'>
            <div class='icon icon-wrap'>
              {{-- <i class='fa fa-clock-o text-contrast'></i> --}}
            </div>
            <div class='content'>
              <p>
                Sz - V: 00:00 - 24:00
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<div id='footer-copyright'>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12 clearfix'>
        <p class='copyright'>
          Copyright
          &copy;
          2017 M5 Truck Center
        </p>
        <div class='links'>
            <a href="/pdfs/adatkezelési_tájékoztató.pdf" style="color: #5d6771;" target="_blank">Adatkezelési tájékoztató</a>
          <a class='btn btn-circle btn-medium-light btn-sm' href='https://www.facebook.com/nonstoptruckservicekamionszerviz/' target="_blank">
            <i class='fa fa-facebook text-dark'></i>
          </a>
          {{--<a class='btn btn-circle btn-medium-light btn-sm' href='https://www.instagram.com/m5truckcenter/' target="_blank">--}}
            {{--<i class='fa fa-instagram text-dark'></i>--}}
          {{--</a>--}}
        </div>
      </div>
    </div>
  </div>
</div>
