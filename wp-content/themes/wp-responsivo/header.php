<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title><?php wp_title(); ?></title>
<link rel="icon" href="favicon">
<link rel="stylesheet"  type="text/css" href="style.css">
<?php wp_head(); ?>
</head>
<body>

<div class="header">
    <nav class="navbar navbar-default navbar-custom">
      <div class="container">
<!--       -fluid-->
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">DAVI<span>WP</span></a>
        </div>
              
<!--              PAREI AOS 7:15 DA VIDEO AULA-->
               
            <?php require_once('assets/includes/wp_bootstrap_navwalker.php'); ?>
               
                
        <?php
            wp_nav_menu( array( 
                'menu'              => 'Menu',
                'theme_location'    => 'menu-header',
                'depth'             => 2,
                'container'         => 'collapse navbar-collapse navbar-collapse-custom',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
        
      </div><!-- /.container-fluid -->
    </nav>
</div>
