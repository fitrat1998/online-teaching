     <!-- Navbar Start -->
    <nav class=" z-index my-bg navbar navbar-expand-lg navbar-light  p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0 text-white"><i class="fa fa-car text-primary me-2 "></i>Drivin</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-white" id="navbarCollapse">
            <div class="navbar-nav  p-4 p-lg-0 text-white ">
                <a href="{{ route('index') }}" class="nav-item nav-link text-white float-start active text-uppercase">News</a>
                <div class="nav-item dropdown mydrop">
                    <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Five initiatives</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ route('first.index') }}" class="dropdown-item text-uppercase">The First initiatives </a>
                        <a href="appointment.html" class="dropdown-item text-uppercase">The Second initiatives</a>
                        <a href="team.html" class="dropdown-item text-uppercase">The Third initiatives</a>
                        <a href="testimonial.html" class="dropdown-item text-uppercase">The fouth</a>
                        <a href="404.html" class="dropdown-item text-uppercase">The fifth</a>
                    </div>
                </div>
                <div class="nav-item dropdown mydrop">
                    <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu m-0">
                        <a href="feature.html" class="dropdown-item text-uppercase">Bussines</a>
                        <a href="appointment.html" class="dropdown-item text-uppercase">Psychologist and neurologist consultation</a>
                        <a href="team.html" class="dropdown-item text-uppercase">health and sports</a>
                        <a href="testimonial.html" class="dropdown-item text-uppercase">RULE OF LAW</a>
                        <a href="404.html" class="dropdown-item text-uppercase">CIRCLE SESSIONS</a>
                        <a href="404.html" class="dropdown-item text-uppercase">LEGAL ADVICE</a>
                        <a href="404.html" class="dropdown-item text-uppercase">Tutoring service</a>
                        <a href="404.html" class="dropdown-item text-uppercase">Dealing culture</a>
                        <a href="404.html" class="dropdown-item text-uppercase">For parents</a>
                        <a href="404.html" class="dropdown-item text-uppercase">Leadership psychology</a>
                        <a href="404.html" class="dropdown-item text-uppercase">Online appeal to the courts</a>
                        <a href="404.html" class="dropdown-item text-uppercase">for kindergarten children</a>
                    </div>
                </div>
                <a href="" class="nav-item nav-link text-white float-start">Router</a>
                <div class="nav-item dropdown mydrop">
                    <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Mia Lyceum</a>
                    <div class="dropdown-menu m-0">
                        <a href="feature.html" class="dropdown-item text-uppercase">civil rights</a>
                        <a href="appointment.html" class="dropdown-item text-uppercase">family rights</a>
                        <a href="team.html" class="dropdown-item text-uppercase">constitutional rights</a>
                        <a href="testimonial.html" class="dropdown-item text-uppercase">administrative rights</a>
                        <a href="404.html" class="dropdown-item text-uppercase">criminal rights</a>
                        <a href="404.html" class="dropdown-item text-uppercase">theory of state and laws</a>
                    </div>
                </div>
                <a href="" class="nav-item nav-link text-white float-start">Libary</a>
                <a href="{{ route('login.index') }}" class="nav-item nav-link text-white float-start">Register</a>
            </div>
           <!--  <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Get Started<i class="fa fa-arrow-right ms-3"></i></a> -->
        </div>
    </nav>
    <!-- Navbar End -->