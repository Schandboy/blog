<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    @include('frontend::includes.head')
</head>

<body class="index-page sidebar-collapse">
<!-- Navbar -->
@include('frontend::includes.navbar')
<!-- End Navbar -->
@yield('Body')

@include('frontend::includes.footer')
@include('frontend::includes.script')
</body>
</html>
