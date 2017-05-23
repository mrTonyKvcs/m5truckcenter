@extends('layouts.app')
@section('content')
<div id='main-content-header'>
  <div class='container'>
    <div class='row'>
      <div class='col-sm-12'>
        <h1 class='title'>
          {{ trans('contact.title') }}
        </h1>
        <ol class='breadcrumb'>
          <li>
            <a href='{{ route('pages.index') }}'>
              <i class='fa fa-home'></i>
            </a>
          </li>
          <li class='active'>{{ trans('contact.title') }}</li>
        </ol>
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
            <h3>Address</h3>
            <ul class='list-unstyled'>
              <li>Székhely:</li>
              <li>6000 Kecskemét, Görbe utca 9.</li>
              <strong><li>Üzletünk, központi raktárunk:</li>
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
            </ul>
          </div>
          <div class='col-sm-3'>
            <div class='icon-wrap icon-circle contrast-bg icon-md'>
              <i class='fa fa-envelope-o text-white'></i>
            </div>
            <h3>E-Mail</h3>
            <ul class='list-unstyled'>
              <li><a href="mailto:m5truckcenter@gmail.com">m5truckcenter@gmail.com</a></li>
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
    <div class='row'>
      <div class='col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2'>
        <div class='page-header page-header-with-icon'>
          <i class='fa fa-envelope'></i>
          <h2>{{ trans('contact.contact-form') }}</h2>
        </div>
        <form class='form form-validation form-contact' method='post'>
          <div class='row'>
            <div class='col-sm-12'>
              <div class='alert alert-success form-contact-success hidden'>Thanks! Your message has been successfully sent!</div>
              <div class='alert alert-danger form-contact-error hidden'>Ooops! There was an error sending your message.</div>
            </div>
          </div>
          <div class='row'>
            <div class='col-sm-6'>
              <div class='form-group control-group'>
                <input class='form-control' data-rule-required='true' name='name' placeholder='Name' type='text'>
                <!-- / this field is required for simple anti spam function, don't remove it! -->
                <input class='form-control' name='human' placeholder='Are you human?' style='display: none;' type='text'>
              </div>
            </div>
            <div class='col-sm-6'>
              <div class='form-group control-group'>
                <input class='form-control' data-rule-email='true' data-rule-required='true' name='email' placeholder='E-Mail' type='email'>
              </div>
            </div>
          </div>
          <div class='row'>
            <div class='col-sm-12'>
              <div class='form-group control-group'>
                <textarea class='form-control' data-rule-required='true' name='message' placeholder='Your message...'></textarea>
              </div>
            </div>
          </div>
          <div class='row'>
            <div class='col-sm-12'>
              <button class='btn btn-contrast btn-block form-contact-submit' data-loading-text="&lt;i class='fa fa-refresh fa-spin'&gt;&lt;/i&gt; Sending..." type='submit'>
                Send message
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
	</div>
	<div class='fade' id='scroll-to-top'>
		<i class='fa fa-chevron-up'></i>
	</div>
</div>
@stop