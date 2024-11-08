<nav class="navbar navbar-main navbar-expand-lg mx-5 px-0 shadow-none rounded" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-2">
        <nav aria-label="breadcrumb">
            <h6 class="font-weight-bold mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <li class="nav-item px-3 d-flex align-items-center">
                    <a href="{{ route('sign-up') }}" class="btn btn-danger text-white p-0">
                        Logout
                    </a>
                </li>
            </div>
        </div>


            <li class="nav-item ps-2 d-flex align-items-center">
                <a href="{{ route('profile') }}" class="nav-link text-body p-0">
                    <img src="../assets/img/user.png" class="avatar avatar-sm" alt="avatar" />
                </a>
            </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
