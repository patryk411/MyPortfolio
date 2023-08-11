<?php /* Template Name: Portfolio - Portfolio */?>

<?php get_header(); ?>


<div class="section-baner">
  <div class="section-baner__img" style="background-image: url(<?php $pageBannerImage = get_field('page_banner_background_image'); echo $pageBannerImage['url'] ?>);">
    <p class="section-baner__img--section-name"><?php the_title(); ?></p>
    <p class="section-baner__img--text"><?php the_field('page_banner_subtitle') ?></p>
    <div class="hero-shadow"></div>
    </div>
</div>



<div class="subpage py-5">
  <section class="subpage__portfolio">
    <div class="container">
    <h3 class="subpage__portfolio--heading"><a href=""><?php the_title(); ?></a></h3>
      <div class="subpage__portfolio__projects">
        <div class="row m-0 p-0 d-flex justify-content-around">
          
          <?php 
        $portfolioRealization = new WP_Query(array(
          'posts_per_page' => 5,
          'post_type' => 'realization'
        ));
        
        while($portfolioRealization->have_posts()) {
          $portfolioRealization->the_post(); ?>
      
      
      <div class="subpage__portfolio__projects__single card col-sm-12 col-md-6 col-lg-6 m-0 p-0 m-5">
        <a href="<?php the_permalink(); ?>"><img src="<?php $realizationImg = get_field('realization_img'); echo $realizationImg['url'] ?>"alt=""></a>
        <a href="<?php the_permalink(); ?>" class="reference">
            <div class="card-body">
              <h4 class="subpage__portfolio__projects__single--heading card-head"><?php the_title(); ?></h4>
              <p class="subpage__portfolio__projects__single--place card-text text-muted"><?php the_field('realization_place'); ?></p>
              <p class="subpage__portfolio__projects__single--time card-time text-muted"><?php the_time('j F Y'); ?></p>
                <!-- <button class="btn btn-outline-primary">hej hej</button> -->
              </div>
            </a>
            </div>
            
            <?php }
        ?>
          
        </div>
      </div>
    </div>
  </section>
</div>



<?php get_footer(); ?>