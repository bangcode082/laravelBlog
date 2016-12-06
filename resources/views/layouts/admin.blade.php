<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>My-Blog</title>

@include('layouts.partial._css-admin')
</head>

<body>
    <!-- menu admin -->
    @include('layouts.partial._menu-admin')

    
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">     
    @include('layouts.partial._breadcrumb')
    @include('layouts.partial._header')
    @yield('content')
  </div>  <!--/.main-->

  @include('layouts.partial._js-admin')
</body>

</html>
