<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- swapped the meta tag for the one below to prevent auto zoom when form fields are active -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>jeffreysbrother | music, etc</title>
    <meta name="author" content="James Cool">
    <!--not sure if the open graph images below are working on Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="jeffreysbrother | music, etc" />
    <meta property="og:description" content="<?php echo $pageDescription; ?>" />
    <meta property="og:image" content="<?php echo $fbImage; ?>" />
    <meta property="og:url" content="<?php echo $fbURL; ?>" />
    <link rel="icon" href="../../favicon.ico">
    <?php wp_head(); ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body <?php body_class(); ?>>

  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php bloginfo('url'); ?>"> | &nbsp; jeffreysbrother &nbsp; | </a>
    </div>

    <div id="navbar" class="collapse navbar-collapse">

      <?php
          $defaults = array(
            'container' => false,
            'theme_location' => 'primary-menu',
            'menu_class' => 'nav navbar-nav navbar-right'
          );

          wp_nav_menu( $defaults );
       ?>

      </ul>
    </div>
  </div>
</nav>
