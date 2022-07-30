<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route("admin.dashboard") }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{route("admin.managers.display")}}" >
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Managers</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route("admin.orders")}}" >
                <i class="menu-icon fas fa-mail-bulk"></i>
                <span class="menu-title">Orders</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Serveurs</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="#">Les serveurs</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Ajouter serveur</a></li>
                </ul>
            </div>

        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route("admin.inbox")}}" >
                <i class="icon-grid-2 menu-icon"></i>
                <span class="menu-title">Inbox</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route("admin.newsletter")}}" >
                <i class="menu-icon fas fa-mail-bulk"></i>
                <span class="menu-title">Newsletter</span>
            </a>
        </li>
        <li class="nav-item">

            <a class="nav-link" onclick="document.getElementById('logoutForm').submit()" href="#">
                <i class="fas fa-sign-out-alt menu-icon"></i>
                <span class="menu-title">Logout</span>
            </a>
            <form id="logoutForm" method="GET" action="{{ route("admin.logout") }}">
                @csrf
            </form>
        </li>
    </ul>
</nav>
