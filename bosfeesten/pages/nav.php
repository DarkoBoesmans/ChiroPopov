<nav class="c-nav-main py-4 fixed-top" id="main-nav">
    <div class="container-fluid px-5 d-flex align-items-center justify-content-between">
        <a class="c-nav__brand mb-0" href="./home.php">
            <div class="c-logo-box mb-0">
                <div class="c-logo-box__top">
                    <span class="c-logo-box__bos text-neon-green">BOS</span>
                    <span class="c-logo-box__year text-white small">2026</span>
                </div>
                <span class="c-logo-box__feesten text-white">FEESTEN</span>
            </div>
        </a>

        <div class="d-none d-lg-flex gap-5 align-items-center">
            <a class="nav-link fw-black text-uppercase h4 mb-0 js-smooth-scroll" href="#praktisch">Locatie</a>
            <a class="nav-link fw-black text-uppercase h4 mb-0 js-smooth-scroll" href="#artists">Line-up</a>
            <a class="nav-link fw-black text-uppercase h4 mb-0 js-smooth-scroll" href="#programma">Dagplanning</a>
            <a class="nav-link fw-black text-uppercase h4 mb-0 js-smooth-scroll" href="#news">Nieuws</a>
            <button class="btn btn-neon-green px-5 py-3 fw-black text-uppercase h4 mb-0" data-bs-toggle="modal"
                data-bs-target="#ticketModal">
                <strong>TICKETS</strong>
            </button>
        </div>

        <button class="btn d-lg-none text-white h1 mb-0" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
            <i class="bi bi-list"></i>
        </button>
    </div>
</nav>

<!-- Offcanvas Mobile Menu -->
<div class="offcanvas offcanvas-end bg-black text-white" tabindex="-1" id="mobileMenu"
    aria-labelledby="mobileMenuLabel">
    <div class="offcanvas-header border-bottom">
        <div class="c-logo-box h3 mb-0">
            <div class="c-logo-box__top">
                <span class="c-logo-box__bos text-neon-green">BOS</span>
                <span class="c-logo-box__year text-white">2026</span>
            </div>
            <span class="c-logo-box__feesten text-white">FEESTEN</span>
        </div>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">
        <ul class="navbar-nav gap-4">
            <li class="nav-item">
                <a class="nav-link display-4 text-uppercase fw-black js-smooth-scroll" href="#praktisch"
                    data-bs-dismiss="offcanvas">Locatie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link display-4 text-uppercase fw-black js-smooth-scroll" href="#artists"
                    data-bs-dismiss="offcanvas">Line-up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link display-4 text-uppercase fw-black js-smooth-scroll" href="#programma"
                    data-bs-dismiss="offcanvas">Dagplanning</a>
            </li>
            <li class="nav-item">
                <a class="nav-link display-4 text-uppercase fw-black js-smooth-scroll" href="#news"
                    data-bs-dismiss="offcanvas">Nieuws</a>
            </li>
        </ul>

        <div class="mt-5">
            <button class="btn btn-neon-green btn-lg w-100 py-3 h3" data-bs-toggle="modal" data-bs-target="#ticketModal"
                data-bs-dismiss="offcanvas">
                <strong>TICKETS</strong>
            </button>
        </div>
    </div>
</div>