
<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>POS</title>
    <link href="{{ asset('css/fonts.css') }}"rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/tailwind.output.css') }}" />
    <script src="{{ asset('js/alpine.min.js') }}" defer></script>
    <script src="{{ asset('js/init.alpine.js') }}"></script>
    @vite('resources/js/app.js')
  </head>
  <body>
    <div class="flex h-screen bg-gray-50":class="{ 'overflow-hidden': isSideMenuOpen }">
      <!-- Desktop sidebar -->
      @includeIf('backend.partials.sidebar')
      <div class="flex flex-col flex-1 w-full">
        <!-- Desktop Header -->
        @includeIf('backend.partials.header')
        <!-- Content -->
        @yield('content')
      </div>
    </div>
  </body>
</html>
