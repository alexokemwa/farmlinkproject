<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top ">
  <div class="container-fluid ">
    <a class="navbar-brand myclasslogomarginright" href="?page_name=landingpage"><?php echo esc(APP_NAME);?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="navbarSupportedContent" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="offcanvas offcanvas-start " tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header ">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><?php echo esc(APP_NAME);?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div> 

      <div class="offcanvas-body">
  <ul class="navbar-nav ms-auto pe-3">
    <li class="nav-item myclass">
      <a class="nav-link" href="?page_name=signup">Signup</a>
    </li>
    <li class="nav-item myclass">
      <a class="nav-link" href="?page_name=loginmanager">Login</a>
    </li>
  </ul>
</div>

  </div>
</nav>