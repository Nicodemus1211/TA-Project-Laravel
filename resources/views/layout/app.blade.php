<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    @include('include.style')
    
    @include('include.script')

</head>

<body>
    <!-- navbar -->
    @include('include.navbar')
    <!-- end of navbar -->

    <!-- content -->
    @yield('content')
    <!-- Our Package end -->


    <!-- footer start -->
    @include('include.footer')
    <!-- footer end -->


    <!-- end of content -->
</body>

</html>