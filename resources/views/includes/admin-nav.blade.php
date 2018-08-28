<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="dashboard.html">Hawa's Delight</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.newOrders') }}">View new orders</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.pastOrders') }}">View previous orders</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.users') }}">View all users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.addMeal') }}">Add meals</a>
            </li>
            <li class="nav-item pull-right">
                <a class="nav-link" href="#">Log out</a>
            </li>
        </ul>
    </div>
</nav>