<header>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Our Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Contact Us</a>
                    </li>


                </ul>
                <div class="d-flex">
                    <button class="btn btn-light" style="margin: 0px 7px;">
                        <a href="{{ route('appointmentpage') }}">Book An Appoinment</a>
                    </button>
                    <button class="btn btn-light  mr-5">
                        <a href="{{ route('login') }}">Login</a>
                    </button>
                </div>
            </div>
        </div>
    </nav>
</header>
