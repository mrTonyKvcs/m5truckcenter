@extends('layouts.app')

@section('title',  trans('meta-tags.contact-title') )

@section('description')
    <meta name='description' content='{{ trans('meta-tags.contact-description') }}'>
@endsection

@section('content')
<div id='main-content-header' class="bg-contact">
  <div class='container'>
    <div class='row'>
        <div class='col-xs-12 col-md-8 col-md-offset-2'>
            <div class="c-header c-header__content c-header__content--subpage" style="padding: 25px;">
                <h1 class='title'>
                    {{ trans('contact.title') }}
                </h1>
                <h3 class="c-header__subtitle">{{ trans('contact.subtitle') }}</h3>
                <a href="tel:+36308504403" class="c-header__phone" style="margin-bottom: 20px;">+36308504403</a>
                <a href="#message" class="btn btn-contrast form-contact-submit text-center c-header__button">{{ trans('home.service-button') }}</a>
            </div>
        </div>
    </div>
  </div>
</div>
<div id='main-content' style="padding-top: 0;">
  <div id='map-canvas'></div>
  <div class='container'>
    <div class='row'>
      <div class='col-sm-12'>
        <div class='page-header page-header-with-icon'>
          <i class='fa fa-map-marker'></i>
          <h2>
            {{ trans('contact.shop') }}
          </h2>
        </div>
        <div class='map-container'>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10906.391509872641!2d19.625193!3d46.890959!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x984dba5318bbf82c!2sM5+Truck+Center+Kft.+Kamion-p%C3%B3tkocsi+alkatr%C3%A9sz+azonnal+kisz%C3%A1ll%C3%ADt%C3%A1ssal*21!5e0!3m2!1shu!2shu!4v1494861126472" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <div class='row'>
      <div class='col-sm-12'>
        <div class='page-header page-header-with-icon'>
          <i class='fa fa-info-circle'></i>
          <h2>
            {{ trans('contact.contact-info') }}
          </h2>
        </div>
        <div class='row text-center'>
          <div class='col-sm-3'>
            <div class='icon-wrap icon-circle contrast-bg icon-md'>
              <i class='fa fa-map-marker text-white'></i>
            </div>
            <h3>{{ trans('contact.address') }}</h3>
            <ul class='list-unstyled'>
              <li>{{ trans('contact.seat') }}:</li>
              <li>6000 Kecskemét, Görbe utca 9.</li>
              <strong><li>{{ trans('contact.shop') }}</li>
              <li>6000 Kecskemét, Felsőcsalános 65.</li></strong>
            </ul>
          </div>
          <div class='col-sm-3'>
            <div class='icon-wrap icon-circle contrast-bg icon-md'>
              <i class='fa fa-phone text-white'></i>
            </div>
            <h3>{{ trans('contact.telephone') }}</h3>
            <ul class='list-unstyled'>
              <li><a href="tel:+36308504403">+36308504403</a></li>
              <li><a href="tel:+36304349215">+36304349215</a></li>
            </ul>
          </div>
          <div class='col-sm-3'>
            <div class='icon-wrap icon-circle contrast-bg icon-md'>
              <i class='fa fa-envelope-o text-white'></i>
            </div>
            <h3>E-Mail</h3>
            <ul class='list-unstyled'>
              <li>
                  <label>{{ trans('contact.sales') }}: </label>
                  <a href=" truckservicekecskemet@gmailcom">truckservicekecskemet@gmail.com</a>
              </li>
              {{--<li>--}}
                  {{--<label>{{ trans('contact.office') }}: </label>--}}
                  {{--<a href="mailto:info@m5truckcenter.com"> info@m5truckcenter.com</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                  {{--<label>{{ trans('contact.service') }}: </label>--}}
                  {{--<a href="mailto:service@m5truckcenter.com">service@m5truckcenter.com</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                  {{--<label>{{ trans('contact.finance') }}: </label>--}}
                  {{--<a href="mailto:invoice@m5truckcenter.com">invoice@m5truckcenter.com</a>--}}
              {{--</li>--}}
            </ul>
          </div>
          <div class='col-sm-3'>
            <div class='icon-wrap icon-circle contrast-bg icon-md'>
              <i class='fa fa-clock-o text-white'></i>
            </div>
            <h3>{{ trans('contact.hours') }}</h3>
            <ul class='list-unstyled'>
              <li>
                {{ trans('contact.monday-friday') }}:
                <strong>00:00 - 24:00</strong>
              </li>
              <li>
                {{ trans('contact.saturday') }}:
                <strong>00:00 - 24:00</strong>
              </li>
              <li>
                {{ trans('contact.sunday') }}:
                <strong>00:00 - 24:00</strong>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class='row' id="message">
      <div class='col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2'>
        <div class='page-header page-header-with-icon'>
          <i class='fa fa-envelope'></i>
          <h2>{{ trans('contact.contact-form') }}</h2>
        </div>
        {!! Form::open(['route' => 'mail.contact', 'class' => 'form form-validation']) !!}
          <div class='row'>
            <div class='col-sm-12'>
              <div class='alert alert-success form-contact-success hidden'>Thanks! Your message has been successfully sent!</div>
              <div class='alert alert-danger form-contact-error hidden'>Ooops! There was an error sending your message.</div>
            </div>
          </div>
          <div class='row'>
            <div class='col-sm-6'>
              <div class='form-group control-group'>
                <div class='form-group control-group'>
                  {{ Form::text('name', null, ['class' => 'form-control control-group', 'placeholder' => trans('tender.name'), 'type' => 'text']) }}
                </div>
              </div>
            </div>
            <div class='col-sm-6'>
              <div class='form-group control-group'>
                {{ Form::text('email', null, ['class' => 'form-control control-group', 'placeholder' => trans('tender.email'), 'type' => 'email']) }}
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class='form-group control-group'>
                {{ Form::text('phone', null, ['class' => 'form-control control-group', 'placeholder' => trans('tender.phone'), 'type' => 'text']) }}
              </div>
            </div>
          </div>
          <div class='row'>
            <div class='col-sm-12'>
              <div class='form-group control-group'>
                {{ Form::textarea('message', null, ['class' => 'form-control control-group', 'placeholder' => trans('contact.message'), 'type' => 'text']) }}
              </div>
            </div>
          </div>
          <div class='row'>
            <div class='col-sm-12'>
              {{ Form::submit(trans('tender.send'), ['class' => 'btn btn-contrast btn-block form-contact-submit']) }}
            </div>
          </div>
        </form>
      </div>
    </div>
	</div>
	<div class='fade' id='scroll-to-top'>
		<i class='fa fa-chevron-up'></i>
	</div>
	    @include('partials.clients')

</div>
@stop
