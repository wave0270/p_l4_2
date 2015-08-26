<!DOCTYPE html>
<html lang="en">
    <head>
    	@include('include/head')
    	@include('include/css')
    	
        @yield('head')
    </head>
    <body>
    	
    	<div>
    		<div id="w-position-top">
    			@include('include/menu_top')
    		</div>
    		<div id="w-position-middle" class="container">
    			<div id="w-position-left">
    				@include('include/menu_left')
    			</div>
    			<div id="w-position-main">
    				@yield('content')
    			</div>
    		</div>
    		<div id="w-position-bottom">
    			@include('include/bottom')
    		</div>
    	</div>
    	@include('include/menu_left_mobile')
    	
		@include('include/js')
        @yield('js')
    </body>
</html>