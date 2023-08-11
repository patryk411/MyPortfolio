<?php /* Template Name: About Me - Portfolio */?>

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
        <section class="subpage__about">
            <div class="row m-0 p-0">

            <?php
            $aboutPost = new WP_Query(array(
                'posts_per_page' => 1,
            ));

            while($aboutPost->have_posts()) {
                  $aboutPost->the_post();?>

                  
            <div class="subpage__about__content col-md-12 col-lg-5">
            <h3 class="subpage__about__content--metabox"><a href=""><?php the_title(); ?></a></h3>
            <p class="subpage__about__content--text"><?php the_content(); ?></p>
            </div>
            <?php }
            ?>

                <div class="subpage__about__empty col-md-12 col-lg-1"></div>
                <div class="subpage__about__img col-md-12 col-lg-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/macbook2.jpg" />
                </div>

            </div>
        </section>
    </div>
</div>


<?php get_footer(); ?>