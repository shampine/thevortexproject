<!DOCTYPE html>
<html class="no-js">
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
      <title><?php wp_title('|'); ?></title>
      <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <nav class="navbar navbar-default">
          <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars"></i>
                  </button>
                  <a class="navbar-brand" href="#">Brand</a>
                </div>
                <div class="collapse navbar-collapse" id="main-navigation">
                  <ul class="nav navbar-nav navbar-right">
                      <?php wp_nav_menu(['menu' => 'main', 'theme_location' => 'header', 'container' => false]); ?>
                  </ul>
                </div>
          </div>
    </nav>