<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Vision" content="Vision Onepage or Multiconcept template ">
        <!--    favicon-->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
                <!--main css file-->
        <link href="{{ asset('assets/css/style_endo.css') }}" rel="stylesheet">
        <!-- <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}"> -->
                <!-- plugins -->
        <link href="{{ asset('assets/vendor/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    

<!-- jQuery plugins-->

<!-- replace!!! -->
		<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
		

		<script src="{{ asset('assets/js/jquery-2.2.4.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- replace!!! -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-filestyle/2.1.0/bootstrap-filestyle.min.js"></script>
        <script type="text/javascript" src="{{asset('assets/js/ckeditor/ckeditor.js')}}"></script>


      <title>{{ $title }}</title>
  </head>

  <body>

<header class="header-style-1 type-1" style="position: relative; margin-top: 20px">
    @yield('header') 


@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
</header>

@yield('content')






</body>
</html>