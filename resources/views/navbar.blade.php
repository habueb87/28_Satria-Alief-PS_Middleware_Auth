<html>
<head>
    @yield('link_rel')
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <div class="img2"></div>
    <a class="navbar-brand" href="main"><strong>Grand Order</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        @yield('activebar')
      </ul>
    </div>
      <a class="nav-link" href="login">Login Admin Here</a>
  </div>
</nav>
    @yield('content')
<div class = "contain">
  <h1>© 2022 Copyright: SATR Digital</h1>
</div>
</body>
</html>