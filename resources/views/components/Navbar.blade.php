<nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
    <a href="/" class="navbar-brand px-lg-4 m-0">
        <h1 class="m-0 display-4 text-uppercase text-white">YAMAN</h1>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav ml-auto p-4">
            <a href="/" class="nav-item nav-link {{Request::is('/') ? 'active' : ''}}">@lang('navbar.Home')</a>
            <a href="/about" class="nav-item nav-link {{Request::is('about') ? 'active' : ''}}">@lang('navbar.About')</a>
            <a href="/service" class="nav-item nav-link {{Request::is('service') ? 'active' : ''}}">@lang('navbar.Service')</a>
            <a href="/menu" class="nav-item nav-link {{Request::is('menu') ? 'active' : ''}}">@lang('Navbar.Menu')</a>
            <a href="/testimonial" class="nav-item nav-link {{Request::is('testimonial') ? 'active' : ''}}">@lang('navbar.Testimonial')</a>
            <a href="/contact" class="nav-item nav-link {{ Request::is('contact') ? 'active' : ''}}">@lang('Navbar.Contact')</a>
            <div style="height: 10px; width:1px;"></div>
            <a href="locale/en" class="nav-item nav-link">EN</a>
            <a href="locale/tr" class="nav-item nav-link">TR</a>
        </div>
    </div>
</nav>
