@extends('layouts.app')
@section('content')
<div id='main-content-header'>
  <div class='container'>
    <div class='row'>
      <div class='col-sm-12'>
        <h1 class='title'>
          {{ trans('navbar.products-services') }}
        </h1>
        <ol class='breadcrumb'>
          <li>
            <a href='{{ route('pages.products') }}'>
              <i class='fa fa-home'></i>
            </a>
          </li>
          <li class='active'>{{ trans('navbar.products-services') }}</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div id='main-content' style="padding-top: 0;">
	<div class="container">
		<div class='row'>
		  <div class='col-sm-12'>
		    <div class='page-header page-header-with-icon'>
		      <i class='fa fa-wrench'></i>
		      <h2>Termékeink <small>Termékeink között megtalálhatóak gyári illetve kiváló minőségű utángyártott kamion és pótkocsi alkatrészek.</small></h2>
		    </div>
		    <div class='text-boxes'>
		      <div class='row text-box'>
		        <div class='col-sm-6'><img class="img-responsive center-block" alt="Lorem ipsum dolor sit amet" width="340" height="188" src="http://placehold.it/340x188" /></div>
		        <div class='col-sm-6'>
		          <h3 class='title'><a href="#">Lorem ipsum dolor sit amet</a></h3>
		          <p>Mauris at ultricies eros. Morbi vel dui nec arcu suscipit euismod. Phasellus pellentesque lectus eget quam ullamcorper consectetur. Vestibulum vitae risus a erat mollis lac in venenatis tellus. Morbi et tristique lacus.</p>
		          <a class='btn btn-contrast btn-bordered btn-sm' href='#'>Read more</a>
		        </div>
		      </div>
		      <hr>
		      <div class='row text-box'>
		        <div class='col-sm-6 col-sm-push-6'><img class="img-responsive center-block" alt="Praesent vitae adipiscing nunc" width="330" height="183" src="http://placehold.it/330x183" /></div>
		        <div class='col-sm-6 col-sm-pull-6'>
		          <h3 class='title'><a href="#">Praesent vitae adipiscing nunc</a></h3>
		          <p>Integer fringtilla fringilla mauris eget accumsan. Nullam quis consequat ipsum, eu cursus mi. Donec quis quam at risus viverra venenatis. Phasellus non nulla tortor. Fusce congue enim sed ullamcorper cursus. Donec tincidunt elit sed felis iaculis laoreet.</p>
		          <a class='btn btn-contrast btn-bordered btn-sm' href='#'>Read more</a>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
        <div class='row'>
              <div class='col-sm-12'>
                <div class='page-header page-header-with-icon'>
                  <i class='fa fa-cloud'></i>
                  <h2>
                    Szolgaltatásaink
                  </h2>
                </div>
                <div class='icon-boxes icon-boxes-lg'>
                  <div class='row'>
                    <div class='col-sm-6 icon-box'>
                      <div class='icon icon-wrap icon-circle icon-lg contrast-bg'>
                        <i class='fa fa-truck text-white'></i>
                      </div>
                      <div class='content'>
                        <h3 class='title'>Shipping</h3>
                        <p>Curabitur id ante at diam consectetur mattis. Donec tristique est turpis, et dapibus odio accumsan non. Donec rutrum sodales interdum.</p>
                      </div>
                    </div>
                    <div class='col-sm-6 icon-box'>
                      <div class='icon icon-wrap icon-circle icon-lg contrast-bg'>
                        <i class='fa fa-wrench text-white'></i>
                      </div>
                      <div class='content'>
                        <h3 class='title'>Technical support</h3>
                        <p>Nulla consectetur turpis a ante tristique feugiat. In venenatis pellentesque leo vehicula consequat. Maecenas elementum velit ut leo imperdiet vehicula.</p>
                      </div>
                    </div>
                  </div>
                  <div class='row'>
	            <div class='col-sm-6 icon-box'>
	              <div class='icon icon-wrap icon-circle icon-lg contrast-bg'>
	                <i class='fa fa-tag text-white'></i>
	              </div>
	              <div class='content'>
	                <h3 class='title'>Warranty</h3>
	                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed massa quis elit sagittis tempor. Ut rutrum sem vel augue rhoncus vestibulum.</p>
	              </div>
	            </div>
	            <div class='col-sm-6 icon-box'>
	              <div class='icon icon-wrap icon-circle icon-lg contrast-bg'>
	                <i class='fa fa-shield text-white'></i>
	              </div>
	              <div class='content'>
	                <h3 class='title'>Security</h3>
	                <p>Cras aliquam accumsan lorem, ac cursus orci molestie eget. Ut nec ultricies augue. Vestibulum lobortis enim felis, non semper arcu convallis at.</p>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	</div>
</div>
@stop