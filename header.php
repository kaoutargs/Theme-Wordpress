<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php wp_head() ?>
  </head>
  <header>
  <body>
    <div class="row">
      <div class="banner img-fluid">

    <div class="container">

      <nav class="navbar navbar-expand-lg navbar-dark mt-3 justify-content-between">
        <a class="navbar-brand" href="#">FUTURA</a>
        <div class="justify-content-end align-items-end">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                      <div class="collapse navbar-collapse" id="navbarNav">
                        <ul><li><a>
                        <?php echo wp_nav_menu( array( 'theme_location' => 'header-menu' ) ) ?></a></li></ul>

      </nav>
