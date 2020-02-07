<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>
<?php echo get_bloginfo('name'); ?>
</title>
<?php wp_head(); ?>
</head>
<body>
<header>
      <div class="container">
        <div class="left-nav-menu">
          <i class="icon ion-md-menu"></i>
          <!-- <i class="icon ion-md-close"></i> -->
          <i class="icon ion-md-search"></i>
          <!-- <ul>
            <li><a href="">Plan your trip</a></li>
            <li><a href="">experience</a></li>
          </ul> -->
          <?php
          wp_nav_menu([
'menu' => 'header-left'
])
?>
        </div>
        <h2 class="nav-titel">mifestival</h2>

        <div class="menu-butons">
          <a class="left-nav-btn btn" href="">Tickets</a>
          <a class="right-nav-btn btn" href="">Line-up</a>
        </div>
      </div>
    </header>