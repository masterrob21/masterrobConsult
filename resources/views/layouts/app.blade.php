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
        <a class="navbar-brand" href="/"><img src="/logo.png" class="comp_logo" alt="company logo"> <span class="comp_name">MASTERROB</span></a>
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
                <li><a class="dropdown-item" href="#">I.T Services</a></li>
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
  <footer class="container-fluid footer">
    <div class="row">
      <div class="col-sm-12 col-md-6 ">
        <div class="border_divider">
          <div class="comp_container">
            <img src="/logo.png" class="comp_logo1" alt="company logo"><span class="comp_name_footer">MasterRob Business Consult</span>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-3 ">
        <div class="border_divider">
          <p class="p_footer">
            Kalabule Junction, <br>
            Ngleshie Amanfrom. <br>
            
          </p>
          <p>Tel: +233203210841</p>
          <p></p>
          
        </div>
      </div>
      <div class="col-sm-12 col-md-3">
        <div>
          <ul class="ul_footer">
            <li><a class="link_item" href="/">Home</a></li>
            <li><a href="/services/it-service">I.T service</a></li>
            <li><a href="/services/accounting">Accounting</a></li>
            <li><a href="/services/company-formation">Company Formation</a></li>
            <li><a href="/contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- script -->
  
  @vite(['resources/js/app.js'])

</body>

</html>