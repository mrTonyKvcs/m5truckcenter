<div class='hero-carousel carousel-blur carousel-blur-arrows carousel-blur-pagination flexslider' id='carousel-example-1'>
    <div class='container'>
        <div class='row'>
            <div class='col-lg-10 col-lg-offset-1 animate' style="padding: 75px 5px;">
                <div class="c-header c-header__content c-header__content--light">
                    <h1 class="c-header c-header__title">{{ trans('home.title') }}</h1>
                    <div>
                        <p class="c-header c-header__text" style="margin-bottom: 20px;">{{ trans('home.subtitle') }}</p>
                        <p class="c-header c-header__text">{!! trans('home.call-text') !!}</p>
                    </div>
                    <p class="c-header c-header__comment" style="margin: 20px 0;">{{ trans('home.short-text') }}</p>
                    <a href="{{ route('pages.contact') }}" class="btn btn-contrast form-contact-submit text-center c-header__button text-uppercase">{{ trans('home.button') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
