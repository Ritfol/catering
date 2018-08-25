<!doctype html>
<html lang="en">

@include('includes.auth-header')

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Hawa's Delight</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

        </ul>
    </div>
</nav>

<br><br>

<div class="container">

    @yield('content')

</div>

@include('includes.auth-scripts')

</body>
    <!-- Navbar content -->
</nav>