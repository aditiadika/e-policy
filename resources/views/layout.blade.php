<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Static Top Navbar Example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

   	<!-- Custom styles for this template -->
    <link href="{{ asset('bootstrap/css/navigasi.css')}}" rel="stylesheet">

    
  </head>

  <body>

    @include('partial.menu')

    <div class="container">

      @yield('content')

      <!-- Main component for a primary marketing message or call to action -->


    </div> <!-- /container -->


   
  	 <script src="{{ asset('bootstrap/js/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
  </body>
</html>
