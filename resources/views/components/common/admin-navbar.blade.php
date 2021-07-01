<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button type="button" id="sidebarCollapse" class="btn btn-info">
                            <span>
                                <i id="sidebarCollapseLeft" class="fa fa-arrow-left" aria-hidden="true"></i>
                                <i id="sidebarCollapseRight" class="fa fa-arrow-right" aria-hidden="true"></i>
                            </span>
        </button>
        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-align-justify"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link btn btn-danger"
                       style="color: #ffffff"
                       href="{{ route('logout') }}"
                       onclick="
                            event.preventDefault();
                            document.getElementById('logout-form').submit();"

                    >Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>

            </ul>
        </div>
    </div>
</nav>
