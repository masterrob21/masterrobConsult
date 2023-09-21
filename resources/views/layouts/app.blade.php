<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>MasterRob Business Consult</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

  <!-- Styles -->
  

  @vite(['resources/css/app.css'])
  <link rel="stylesheet" href="/app.css">
  @yield('style')

</head>

<body>
  <div id="container">
    <nav class="navbar navbar-expand-md bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="/logo.png" class="comp_logo" alt="company logo"> <span class="comp_name">MASTERROB</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
             <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Accounting</a></li>
            <li><hr class="dropdwon-divider"></li>
            <li><a class="dropdown-item" href="#">I.T Services</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Company Formation</a></li>
          </ul>
        </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contact us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <header>
      @yield('banner')
    </header>
    <main>
      @yield('content')
    </main>

  </div>
  <footer id="footer">
    <div>
      <p>This is the footer of the website.</p>
    </div>
  </footer>
  <!-- script -->
  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> --}}
  @vite(['resources/js/app.js'])

</body>

</html>