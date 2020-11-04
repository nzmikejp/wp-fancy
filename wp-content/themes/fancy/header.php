<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Resume - Start Bootstrap Theme</title>
    
    <?php wp_head()?>
  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Clarence Taylor</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?php echo get_template_directory_uri()?>/img/profile.jpg" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <?php wp_nav_menu(array( 
          	'theme_location' => 'main-menu',
          	'container' => 'ul',
          	'menu_class' => 'navbar-nav'
        )); ?>
     
      </div>
      <form>
        <div class="form-group" method="get" action="<?php echo get_site_url('/')?>">
          <input type="text" name="s" class="form-control" id="keywords" placeholder="Enter keywords">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
      </form>
    </nav>