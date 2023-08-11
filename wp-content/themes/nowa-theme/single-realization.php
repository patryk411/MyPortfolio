<?php get_header(); ?>

<div class="section-baner">
  <div class="section-baner__img" style="background-image: url(<?php $pageBannerImage = get_field('page_banner_background_image'); echo $pageBannerImage['url'] ?>);">
    <p class="section-baner__img--section-name"><?php the_title(); ?></p>
    <p class="section-baner__img--text"><?php the_field('page_banner_subtitle') ?></p>
    <div class="hero-shadow"></div>
    </div>
</div>

<div class="subpage py-5">
  <div class="container">
  <section class="subpage__single-realization">
    <div class="row m-0 p-0 d-flex justify-content-between">
      
      <div class="subpage__single-realization__single-project col-md-12 col-lg-6">
      <h3 class="subpage__single-realization--heading"><a><?php the_title(); ?></a></h3>
      <p class="subpage__single-realization__single-project--text"><?php the_content(); ?></p>
    </div>


    <div class="subpage__single-realization__img col-md-12 col-lg-6">
        <img src="<?php $realizationImg = get_field('realization_img'); echo $realizationImg['url'] ?>"alt="">
        <a href="<?php the_field('realization_link') ?>"><button class="btn subpage__single-realization__img--button">Visit Website <i class="fa-solid fa-arrow-right-long"></i></button></a>
      </div>

  </div>
  </section>
  </div>
</div>


<?php get_footer(); ?>