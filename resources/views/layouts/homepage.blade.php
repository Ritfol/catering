<!DOCTYPE html>
<!--
**********************************************************************************************************
Copyright (c) 2018 Himanshu Softtech.
********************************************************************************************************** -->
<!--
Template Name: Catering HTML Template
Version: 1.0.0
Author: Kamleshyadav
Website: http://himanshusofttech.com/
Purchase: http://themeforest.net/user/kamleshyadav
-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js">
<![endif]-->
<!--[if !IE]>
<!-->
<html lang="en">
<!--
<![endif]-->

@include('includes.homepage-header')
<!-- Body Start -->

<body>
<!-- Preloader-->
<div id="preloader">
    <div id="status">
        <img src="{{ asset('images/loader.gif') }}" alt="" />
    </div>
</div>


@yield('content')

@include('includes.homepage-footer')

@include('includes.homepage-scripts')

</body>


<!-- Mirrored from kamleshyadav.com/html/catering/catering-default/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Aug 2018 06:31:24 GMT -->
</html>