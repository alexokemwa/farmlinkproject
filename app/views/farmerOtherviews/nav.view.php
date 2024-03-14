<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top ">
  <div class="container-fluid ">
    <a class="navbar-brand myclasslogomarginright" href="?page_name=home"><?php echo esc(APP_NAME);?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="navbarSupportedContent" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="offcanvas offcanvas-start " tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header ">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><?php echo esc(APP_NAME);?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div> 

      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end  pe-3">
        <li class="nav-item  myclass  ">
          <a class="nav-link active" aria-current="page"  href="?page_name=home">Home</a>
        </li>
        <li class="nav-item myclass">
          <a class="nav-link"  href="?page_name=markets">markets</a>
        </li>
        <li class="nav-item myclass">
          <a class="nav-link" href="?page_name=orders">orders</a>
        </li>
        <li class="nav-item dropdown myclass">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            reports
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page_name=order">orders</a></li>
            <li><a class="dropdown-item" href="?page_name=payment">payment</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="?page_name=markets">markets</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown  myclass">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            account
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page_name=view">view</a></li>
            <li><a class="dropdown-item" href="?page_name=updateacount">update</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="?page_name=deleteaccount">delete</a></li>
          </ul>
        </li>
        
      </ul>
      
      <form class="d-flex mt-3 ms-auto"   role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      </div>

    </div>
  </div>
</nav>