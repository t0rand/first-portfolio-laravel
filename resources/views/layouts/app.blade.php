<!-- resources/views/layouts/app.blade.phpとして保存 -->

<html>
  <head>
    <title>CameraCriticism - @yield('title')</title>
  </head>
  <body>
    {{-- @include('layouts.partials.header') --}}
    <div class="container">
      @yield('content')
    </div>
    @include('layouts.partials.footer')
  </body>
</html>