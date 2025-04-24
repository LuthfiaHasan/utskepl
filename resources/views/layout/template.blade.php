<!doctype html>
<html lang="en">
  <head>
    <!-- Metadata dasar -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tiMovie - @yield('title', 'Website')</title>

    <!-- Bootstrap CSS -->
    <link href="/bootstrap/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-success" data-bs-theme="dark">
      <div class="container">
        <!-- Brand / Logo -->
        <a class="navbar-brand" href="/">tiMovie</a>

        <!-- Toggle button for mobile view -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible navbar content -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left navigation links -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Watchlist</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/movies/create">Input Movie</a>
            </li>
          </ul>

          <!-- Search form -->
          <form action="/" class="d-flex" role="search">
            <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <!-- Main Content Area -->
    <div class="container my-4">
      @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-success text-center text-white py-3">
      &copy; 2023 by Yori Adi Atma
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="/bootstrap/bootstrap.bundle.min.js"></script>
  </body>
</html>
