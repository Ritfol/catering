<!doctype html>
<html lang="en">

@include('includes.auth-header')

<body>

@include('includes.admin-nav')

@yield('content')
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
@include('includes.auth-scripts')
</body>
</html>