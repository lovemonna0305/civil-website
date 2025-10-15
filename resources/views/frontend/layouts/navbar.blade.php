<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="{{ route('index') }}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1><img src="backend/img/laravel.png" alt=""></h1>
        </a>

      <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="{{ route('index') }}" class="{{ Route::is('index') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('about') }}" class="{{ Route::is('about') ? 'active' : '' }}">About</a></li>
            <li><a href="{{ route('services') }}" class="{{ Route::is('services') ? 'active' : '' }}">Services</a></li>
            <li><a href="{{ route('projects') }}" class="{{ Route::is('projects') ? 'active' : '' }}">Projects</a></li>
            <li><a href="{{ route('contact') }}" class="{{ Route::is('contact') ? 'active' : '' }}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>