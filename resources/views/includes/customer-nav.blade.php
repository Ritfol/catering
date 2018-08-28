<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="dashboard.html">Hawa's Delight</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="dashboard.html">Book meal</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="past-orders.html">View past orders</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('logout') }}">Log out</a>
            </li>
        </ul>

    </div>
</nav>