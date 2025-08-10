<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary"><i class="fas fa-hand-holding-water me-3"></i>Acuas</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ route('home') }}" class="nav-item nav-link @yield('home_active')">Home</a>
                        <a href="{{ route('about') }}" class="nav-item nav-link @yield('about_active')">About</a>
                        <a href="{{ route('service') }}" class="nav-item nav-link @yield('service_active')">Service</a>
                        <a href="{{ route('blog') }}" class="nav-item nav-link @yield('blog_active')">Blog</a>
                        <a href="{{ route('contact') }}" class="nav-item nav-link @yield('contact_active')">Contact</a>
                    </div>
                </div>
            </nav>
