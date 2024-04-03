<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top ">
  <div class="container-fluid ">
    <a class="navbar-brand myclasslogomarginright" href="#"><?php echo esc(APP_NAME);?></a>
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
        
        <li class="nav-item dropdown myclass">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            farmers
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page_name=orders">orders</a></li>
            <li><a class="dropdown-item" href="?page_name=payments">payment</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="?page_name=report">reports</a></li>
            <li><a class="dropdown-item" href="?page_name=account">accounts</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown myclass">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            employees
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page_name=deliveries">deliveries</a></li>
            <li><a class="dropdown-item" href="?page_name=payment">payment</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="?page_name=reports">reports</a></li>
            <li><a class="dropdown-item" href="?page_name=accounts">accounts</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown myclass">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            communication
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page_name=email">email</a></li>
            <li><a class="dropdown-item" href="?page_name=message">message</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown myclass">
          <a class="nav-link dropdown-toggle" data-bs-auto-close = 'outside' href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            other
          </a>
          <ul class="dropdown-menu">
            <li class="dropstart">
              <a class="dropdown-item dropdown-toggle  myclassrotatepointer" data-bs-toggle="dropdown" href="?page_name=company_property">company_property</a>
            <ul class="dropdown-menu">
            <li>
              <a href="?page_name=vehicles" class="dropdown-item myclassrotatepointer">vehicles</a>
              <a href="?page_name=vehiclepack" class="dropdown-item myclassrotatepointer">vehiclepack</a>
            </li>
            </ul>
            <li class="dropstart">
              <a class="dropdown-item dropdown-toggle myclassrotatepointer" data-bs-toggle="dropdown" href="?page_name=accounts">accounts</a>
            <ul class="dropdown-menu ">
            <li>
              <a href="?page_name=view" class="dropdown-item myclassrotatepointer">view</a>
              <a href="?page_name=update" class="dropdown-item myclassrotatepointer">update</a>
              <a href="?page_name=delete" class="dropdown-item myclassrotatepointer">delete</a>
            </li>
            </ul>
            <li class="nav-item  myclass  ">
          <a class="nav-link active" aria-current="page"  href="?page_name=home">add_place</a>
          </li>
          <li class="nav-item  myclass  ">
            <a class="nav-link active" aria-current="page"  href="?page_name=home">add_goods</a>
          </li>
           </ul>
           
           
          </li>
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