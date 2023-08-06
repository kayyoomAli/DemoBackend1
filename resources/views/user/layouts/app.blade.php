<html>
  <head>
	@include('user.layouts.head')

  </head>
  <body>
  	@include('.user.layouts.header')

  	@include('.user.layouts.sidebar')


    @yield('content')
    {{--  @include('.user.layouts.sidebar')  --}}


	@include('user.layouts.footer')


  </body>
</html>
