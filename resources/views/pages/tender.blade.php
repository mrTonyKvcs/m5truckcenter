@extends('layouts.app')
@section('content')
<div id='main-content-header'>
  <div class='container'>
    <div class='row'>
      <div class='col-sm-12'>
        <h1 class='title'>
          {{ trans('navbar.tender') }}
        </h1>
        <ol class='breadcrumb'>
          <li>
            <a href='{{ route('pages.index') }}'>
              <i class='fa fa-home'></i>
            </a>
          </li>
          <li class='active'>{{ trans('navbar.tender') }}</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div id='main-content' style="padding-top: 0;">
  <div class="row">
    <div class='col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2'>
      <div class='page-header page-header-with-icon mt-70' style="margin-top: 70px;">
        <i class='fa fa-comments-o'></i>
        <h2>Miben segíthetünk?</h2>
        <small class="mt-30">Kollégáink a lehető leghamarabb telefonon vagy e-mailben felkeresik Önt. Amennyiben gyorsabban szeretne árajánlatot kapni hívjon minket telefonon!</small>
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
              <input class='form-control' data-rule-email='true' data-rule-required='true' name='email' placeholder='Telefonszám' type='email'>
            </div>
          </div>
        </div>
         <div class='row'>
          <div class='col-sm-6'>
            <div class='form-group control-group'>
              <input class='form-control' data-rule-required='true' name='name' placeholder='Gépjármű típusa' type='text'>
              <!-- / this field is required for simple anti spam function, don't remove it! -->
              <input class='form-control' name='human' placeholder='Are you human?' style='display: none;' type='text'>
            </div>
          </div>
          <div class='col-sm-6'>
            <div class='form-group control-group'>
              <input class='form-control' data-rule-email='true' data-rule-required='true' name='email' placeholder='Alvázszám' type='email'>
            </div>
          </div>
        </div>
         <div class='row'>
          <div class='col-sm-12'>
            <div class='form-group control-group'>
              <input class='form-control' data-rule-email='true' data-rule-required='true' name='email' placeholder='Keresett alkatrészek megnevezése' type='email'>
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
@stop