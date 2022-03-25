<html>
  <head>
  <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
  <link href="/bootstrap/css/headers.css" rel="stylesheet">
  <link href="/bootstrap/css/footer.css" rel="stylesheet">
  <link href="/bootstrap/css/signin.css" rel="stylesheet">
  <link href="/bootstrap/css/dashboard.css" rel="stylesheet">
  <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>

<body>
  <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src="/bootstrap/images/icon.png" class="bi me-2" width="32" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></img>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <!-- li><a href="/" class="nav-link px-2 text-white" onclick="href='/'">Home</a></li> -->
          <li><a href="/" class="nav-link px-2 text-white">Home</a></li>
          <li><a href="/userlist" class="nav-link px-2 text-white">Userlist</a></li>
          <li><a href="/editmyuser?rid={{session()->get('user')->id}}" class="nav-link px-2 text-white">Profile</a></li>
        </ul>
        <form action="userlist" method="post" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          @csrf
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search" value="{{request()->input('search')}}" name="search">
          <!-- <button type="submit"  class="btn btn-outline-light me-2">Search</button> -->
        </form>
        
        <div class="text-end">
          <a type="button" class="btn btn-warning" href="/logout">Logout</a>
        </div>
        
      </div>
    </div>
  </header>