<!Doctype html>
    <head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   </head>
    <body>
        <div class = "header">
            @section('header')
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">User Portal</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="list">Users List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create">Create Account</a>
      </li>
    </ul>
  </div>
</nav>
         @show
        </div>
        <div class = "content">
        @section('content')
        @show
        </div>
        <div class = "footer">
        @section('footer')
        
        <!-- Footer -->
<footer class="page-footer font-small blue fixed-bottom">

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2022 Copyright:
  <a href="/"> Enquiry.com</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
         @show
        </div>
    </body>
</!Doctype>