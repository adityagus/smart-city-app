<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @yield('title')
  @stack('prepend-styles')
  @include('includes.styles')
  @stack('addon-styles')
</head>
<body>
  
  @yield('content')
  @include('includes.testimonial')
  @include('includes.bottom-panel')
  @include('includes.footer')
  
  
  @stack('prepend-scripts')
  @include('includes.scripts')
  @stack('addon-scripts')
</body>
</html>