<nav class="navbar navbar-expand-lg bg-secondary">
    <div class="container">
      <a class="navbar-brand fs-3 fw-bold text-light" href="/">TABUSI <span class="text-danger">WEBSITE</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav fs-6">
          <li class="nav-item">
            <a class="nav-link text-light  {{ ($active === "home") ? "active fw-bold" : "" }} " href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light {{ ($active === "product") ? "active fw-bold" : "" }}" href="/product">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light {{ ($active === "checkout") ? "active fw-bold" : "" }}" href="/checkout">Checkout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light {{ ($active === "about") ? "active fw-bold" : "" }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light {{ ($active === "contact") ? "active fw-bold" : "" }}" href="/contact">Contact</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu bg-secondary">
            <li><a class="dropdown-item text-light" href="/dashboard">My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item text-light" href="#">Logout</button>
              </form>
            </li>
          </ul>
        </li>
        @else
          <li class="nav-item">
            <a href="/login" class="nav-link text-light {{ ($active === "login fw-bold") ? "active" : "" }}">Login</a>
          </li>
        @endauth
      </ul>  
      </div> 
    </div>
    </div>
  </nav>