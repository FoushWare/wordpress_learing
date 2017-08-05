<!DOCTYPE html>
<html <?php language_attributes();?>>
    <head>
        <meta charset="<?php bloginfo('charset')?>" />
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head();?>
    </head>
    <body>

              <!-- Static navbar -->
              <nav class="navbar navbar-inverse">
                <div class="container">

                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Project name</a>
                  </div>
                  <div id="navbar" class="navbar-collapse collapse navbar-right">
                        <?php Foush_bootstrap_navbar();?>
                  </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
              </nav>


