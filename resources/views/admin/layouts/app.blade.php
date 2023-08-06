<html>
  <head>
	@include('admin.layouts.head')

  </head>
  <body>
    @include('admin.layouts.header')

  	@include('.admin.layouts.sidebar')




    @yield('content')

	@include('admin.layouts.footer')


  </body>
</html>
