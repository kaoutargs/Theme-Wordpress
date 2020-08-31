<?php get_header()?>
<div class="container d-flex h-100">
  <div class="row d-flex align-items-center">
    <div class="col-lg-10">
      <div class="row d-flex">
        <div class="col-lg-5">
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <h2 class="text-white font-weight-bold">Welcome</h2>
            <p>I am text block. Click edit button to change
              this text.Lorem ipsum dolor sit amet, consectetur
              adipiscing elit. Ut elit tellus, luctus nec ullamcorper
              mattis, pulvinar dapibus leo.</p>
              <button type="button" class="btn btn-rounded waves-effect">SHOW MORE</button>
            </div>
          </div>
        </div>
      </div>
    </div>
</header>
    <main>
     <br>
     <br>

    <section id="about">

      <div class="container d-flex align-items-center justify-content-center h-100">
        <div class="row">

          <?php
    $my_query = new WP_Query('category_name=ijhv&showposts=1');
    while ($my_query->have_posts()) : $my_query->the_post();
    $do_not_duplicate = $post->ID;
    ?>
          <div class="col-lg-5">
            <h2 class="text-dark font-weight-bold"><?php the_title() ?></h2>
            <hr class="bg-warning d-inline-block text-left mt-0 mb-4">
            <p class="mb-4 pr-3 text-dark"><?php the_content() ?></p>
            <div class="col-lg-5 pl-0">
              <button type="button" class="btn btn-outline-warning btn-rounded waves-effect">SHOW MORE</button>
            </div>
          </div>

<?php endwhile; ?>

          <div class="offset-1 col-lg-6">
            <img src="<?php echo header_image() ?>" alt="Team_Work" class="img-fluid ii">
          </div>
        </div>
      </div>
    </section>
<br>
<br>
    <section id="aboutus2">
    <div class="bg d-flex justify-content-center">
        <div class="container d-flex justify-content-center h-100 flex-column">
         <div class="row mt-4">

           <div class="service-text col-lg-4">


<?php dynamic_sidebar( 'blog-sidebar' ); ?>
             <h4>LOREMIPSUM</h4>
            <p>Lorem fistrum por la gloria de mi madre se calle ustée papaar papaar no te digo trigo por no llamarte Rodrigor. Ahorarr fistro diodeno caballo blanco caballo negroorl pecador.</p>
           </div>

           <div class="service-text col-lg-4">
<?php dynamic_sidebar( 'blog-sidebar' ); ?>             <h4>LOREMIPSUM</h4>
             <p>Lorem fistrum por la gloria de mi madre se calle ustée papaar papaar no te digo trigo por no llamarte Rodrigor. Ahorarr fistro diodeno caballo blanco caballo negroorl pecador.</p>
           </div>

           <div class="service-text col-lg-4">
<?php dynamic_sidebar( 'blog-sidebar' ); ?>             <h4>LOREMIPSUM</h4>
             <p>Lorem fistrum por la gloria de mi madre se calle ustée papaar papaar no te digo trigo por no llamarte Rodrigor. Ahorarr fistro diodeno caballo blanco caballo negroorl pecador.</p>
           </div>
         </div>
        </div>
      </div>
    </section>
<br>
<br>
    <section id="services">

      <div class="container d-flex align-items-center justify-content-center h-100">
        <div class="row">

          <div class="col-lg-12">
            <h2 class="text-dark font-weight-bold">Our services</h2>
            <hr class="bg-warning d-inline-block text-left mt-0 mb-4">
</div>
</div>

<!-- Card -->

<div class="card-deck">

  <div class="card align-items-center bg-warning">
    <!-- Title -->
    <h5 class="card-title text-white"><a>LOREMIPSUM</a></h5>
    <!-- Text -->
    <p class="card-text text-white">$6</p>

    <!-- Card image -->
  <img class="pack"src="<?php echo get_template_directory_uri(); ?> /img/bottle.png" alt="bottle"/>
    <!-- Card content -->
    <div class="card-body">

      <!-- Button -->
      <a href="" class="btn btn-outline-warning btn-rounded waves-effect">PURCHASE</a>
  </div>
</div>


<div class="card align-items-center bg-warning">
  <!-- Title -->
  <h5 class="card-title text-white"><a>LOREMIPSUM</a></h5>
  <!-- Text -->
  <p class="card-text text-white">$6</p>

  <!-- Card image -->
<img class="pack"src="<?php echo get_template_directory_uri(); ?> /img/pack.png" alt="pack"/>
  <!-- Card content -->
  <div class="card-body">

    <!-- Button -->
    <a href="" class="btn btn-outline-warning btn-rounded waves-effect">PURCHASE</a>

</div>


<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>



  <div class="card align-items-center bg-warning">
    <!-- Title -->
    <h5 class="card-title text-white"><a>LOREMIPSUM</a></h5>
    <!-- Text -->
    <p class="card-text text-white">$6</p>

    <!-- Card image -->
  <img class="pack"src="<?php echo get_template_directory_uri(); ?> /img/snack.png" alt="snack"/>
    <!-- Card content -->
    <div class="card-body">

      <!-- Button -->
      <a href="" class="btn btn-outline-warning btn-rounded waves-effect">PURCHASE</a>
  </div>
</div>
</div>

<?php get_footer(); ?>
