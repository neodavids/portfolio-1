<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  @include('partials._meta')
  <title>{{ config('app.name', 'Portfolio | Admin') }}</title>
  @include('partials._vendors')
  <link type="text/css" rel="stylesheet" href="{{ asset('css/admin.css') }}">
  @yield('stylesheets')
  @yield('scripts_top')
</head>
<body>
  @if(Auth::check())
    @include('partials._adminNav')
  @else
    <div class="back-button">
      <a href="{{ url()->previous() }}">  <i class="fa fa-arrow-left"></i> </a>
    </div>
    <div class="not-logged">
  @endif

  @yield('content')

  <script type="text/javascript" src="{{ asset('js/admin.js') }}"></script>
  @yield('scripts_bottom')
</body>
</html>
