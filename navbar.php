


<script>
.navbar {
  background-color: #aaa8ab;
}
.navbar .navbar-brand {
  color: #f5f8f9;
}
.navbar .navbar-brand:hover,
.navbar .navbar-brand:focus {
  color: #ddcdee;
}
.navbar .navbar-text {
  color: #f5f8f9;
}
.navbar .navbar-text a {
  color: #ddcdee;
}
.navbar .navbar-text a:hover,
.navbar .navbar-text a:focus {
  color: #ddcdee; 
}
.navbar .navbar-nav .nav-link {
  color: #f5f8f9;
  border-radius: .25rem;
  margin: 0 0.25em;
}
.navbar .navbar-nav .nav-link:not(.disabled):hover,
.navbar .navbar-nav .nav-link:not(.disabled):focus {
  color: #ddcdee;
}
.navbar .navbar-nav .dropdown-menu {
  background-color: #aaa8ab;
  border-color: #716f72;
}
.navbar .navbar-nav .dropdown-menu .dropdown-item {
  color: #f5f8f9;
}
.navbar .navbar-nav .dropdown-menu .dropdown-item:hover,
.navbar .navbar-nav .dropdown-menu .dropdown-item:focus,
.navbar .navbar-nav .dropdown-menu .dropdown-item.active {
  color: #ddcdee;
  background-color: #716f72;
}
.navbar .navbar-nav .dropdown-menu .dropdown-divider {
  border-top-color: #716f72;
}
.navbar .navbar-nav .nav-item.active .nav-link,
.navbar .navbar-nav .nav-item.active .nav-link:hover,
.navbar .navbar-nav .nav-item.active .nav-link:focus,
.navbar .navbar-nav .nav-item.show .nav-link,
.navbar .navbar-nav .nav-item.show .nav-link:hover,
.navbar .navbar-nav .nav-item.show .nav-link:focus {
  color: #ddcdee;
  background-color: #716f72;
}
.navbar .navbar-toggle {
  border-color: #716f72;
}
.navbar .navbar-toggle:hover,
.navbar .navbar-toggle:focus {
  background-color: #716f72;
}
.navbar .navbar-toggle .navbar-toggler-icon {
  color: #f5f8f9;
}
.navbar .navbar-collapse,
.navbar .navbar-form {
  border-color: #f5f8f9;
}
.navbar .navbar-link {
  color: #f5f8f9;
}
.navbar .navbar-link:hover {
  color: #ddcdee;
}

@media (max-width: 575px) {
  .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item {
    color: #f5f8f9;
  }
  .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item:hover,
  .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item:focus {
    color: #ddcdee;
  }
  .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item.active {
    color: #ddcdee;
    background-color: #716f72;
  }
}

@media (max-width: 767px) {
  .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item {
    color: #f5f8f9;
  }
  .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item:hover,
  .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item:focus {
    color: #ddcdee;
  }
  .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item.active {
    color: #ddcdee;
    background-color: #716f72;
  }
}

@media (max-width: 991px) {
  .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item {
    color: #f5f8f9;
  }
  .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item:hover,
  .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item:focus {
    color: #ddcdee;
  }
  .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item.active {
    color: #ddcdee;
    background-color: #716f72;
  }
}

@media (max-width: 1199px) {
  .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item {
    color: #f5f8f9;
  }
  .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item:hover,
  .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item:focus {
    color: #ddcdee;
  }
  .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item.active {
    color: #ddcdee;
    background-color: #716f72;
  }
}

.navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item {
  color: #f5f8f9;
}
.navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item:hover,
.navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item:focus {
  color: #ddcdee;
}
.navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item.active {
  color: #ddcdee;
  background-color: #716f72;
}

</script>

<nav class="navbar fixed-top navbar-expand-md navbar-light bg-faded">
  <a class="navbar-brand" href="javascript:void(0)">Brand</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="javascript:void(0)">Link <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0)">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="javascript:void(0)">Action</a>
          <a class="dropdown-item" href="javascript:void(0)">Another action</a>
          <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
        </div>
      </li>
    </ul>
    <form class="form-inline mr-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-light my-2 my-sm-0" type="submit">Submit</button>
    </form>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link disabled" href="javascript:void(0)">Disabled</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="javascript:void(0)">Action</a>
          <a class="dropdown-item" href="javascript:void(0)">Another action</a>
          <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
        </div>
      </li>
    </ul>
  </div>
</nav>


