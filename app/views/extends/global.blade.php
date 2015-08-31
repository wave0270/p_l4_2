<!DOCTYPE html>
<html lang="en">
    <head>
    	@include('include/head')
    	<!-- css -->
    	@include('include/css')
        @yield('head')
    </head>
    <body>
    	<div id="page">
    		<div id="w-position-top">
    			@include('include/menu_top')
    		</div>
    		<div id="w-position-middle" class="container">
    			<div id="w-position-left" class="col-md-3">
    				@include('include/menu_left')
    			</div>
    			<div id="w-position-main" class="col-md-9">
    				@yield('content')
    			</div>
    		</div>
    		<div id="w-position-bottom">
    			@include('include/bottom')
    		</div>
    	</div>
    	<div id="process-loading">
    		<img atl="process-loading" src="{{url('images/hex-loader.gif')}}" />
    	</div>
    	@include('include/menu_left_mobile')
    	<!-- js -->
		@include('include/js')
        @yield('js')
    </body>
</html>