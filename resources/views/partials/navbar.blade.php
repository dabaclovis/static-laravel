<nav class="navbar navbar-expand-md sticky-top shadow-sm navbar-dark bg-dark">
    <div class=" container">
    <a class="navbar-brand" href="{{ route('pages.index') }}">
        <h3>PortFolio</h3>
    </a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link w3-large {{ request()->is('/') ? 'active': '' }}" href="{{ route('pages.index') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link w3-large {{ request()->is('blog') ? 'active': '' }}" href="{{ route('pages.blog') }}">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link w3-large {{ request()->is('about') ? 'active': '' }}" href="{{ route('pages.about') }}">About</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="#">Action 1</a>
                    <a class="dropdown-item" href="#">Action 2</a>
                </div>
            </li>
        </ul>
    </div>
</div>
</nav>
