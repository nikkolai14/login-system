<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration and Login System with PHP and MySQL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.0/css/foundation.min.css">
    <style type="text/css">
      body {
        background-color: whitesmoke;
      }

      .top-bar, .top-bar ul {
          background-color: #d8524e;
      }

      .title-bar {
        background: #d8524e;
      }

      .menu>li>a {
        color: black;
      }

      .dropdown.menu>li.is-dropdown-submenu-parent>a {
        color: white;        
        padding-top: 12px;
        padding-bottom: 9px;
        margin-top: -7px;
      }

      .dropdown.menu>li.is-dropdown-submenu-parent>a:after {
          border-color: #fdfdfd transparent transparent
      }

      .top-nav_fixed {
        position: fixed;
        width: 100%;
        top: 0;
        min-height: 46px;
        height: 46px;
      }

      main {
        margin-top: 66px;
      }

      .content-wrapper {
        background-color: white;
        padding: 1rem;
      }
    </style>

  </head>
  <body>    
    <div class="off-canvas-wrapper">
      <div class="off-canvas position-left" id="side-menu" data-transition="overlap" data-off-canvas>
          <button class="close-button" aria-label="Close menu" type="button" data-close>
            <span aria-hidden="true">&times;</span>
          </button>
          <ul class="menu vertical">
            <li><a href="#">MENU</a>
              <ul class="nested vertical menu">
                <li><a href="#">One</a></li>
                <li><a href="#">Two</a></li>
                <li><a href="#">Three</a></li>
                <li><a href="#">Four</a></li>
              </ul>
            </li>
          </ul>
      </div>
      <div class="off-canvas-content" data-off-canvas-content>
        <div class="title-bar top-nav_fixed">
          <div class="top-bar-left">
            <button class="menu-icon" type="button" data-toggle="side-menu"></button>
            <span class="title-bar-title">Dashboard</span>
          </div>
          <div class="top-bar-right">
            <ul class="dropdown menu" data-dropdown-menu>
              <li>
                <a href="#">Hello <?php echo htmlentities($userData['first_name']); ?>!</a>
                <ul class="menu">
                  <li><a href="#">My Profile</a></li>
                  <li><a href="<?php echo site_url('admin_page/logout'); ?>">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        
        <main>
          <div class="row">
            <div class="small-12 large-3 columns">
              <div class="content-wrapper">A</div>
            </div>
            <div class="small-12 large-9 columns">
              <div class="content-wrapper">B</div>
            </div>
          </div>
        </main>

        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.0/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>

  </body>
</html>