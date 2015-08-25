<!DOCTYPE html>
<html lang="en">
    <head>
    	@inlude('head')
    	@inlude('css')
    	
        @yield('head')
    </head>
    <body>
        @yield('content')
        
		@inlude('js')
		
        @yield('js')
    </body>
</html>