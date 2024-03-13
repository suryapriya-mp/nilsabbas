<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- styles -->
    <?php
      wp_head();
    ?>
    
    <!-- styles -->
    <title>Document</title>
  </head>
  <body>
    <!-- body content start -->

    <!-- Header start -->
    <div class="head">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="content-wrapper">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- <div class="collapse navbar-collapse" id="navbarNav"> -->
            <!-- <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">PRODUCTS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">OUR COMPANY</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">CAREERS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">CONTACT US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">REFERENCES</a>
              </li>
            </ul> -->

            <?php
              wp_nav_menu(
                 array( 
                  'theme_location' => 'header-menu', 
                  'depth'          => 2,
                  'container'         => 'div',
                  'container_class' => 'collapse navbar-collapse',
                  'container_id'      => 'navbarNav', 
                  'menu_class'        => 'navbar-nav',
                  'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'            => new WP_Bootstrap_Navwalker(),
                  ) 
                );
            ?>
          <!-- </div> -->
        </div>
      </nav>
    </div>

    <!-- Header end -->