<?php get_header(); ?>

<header class="header">
  <div class="header__text">
    <div class="container">
      <h1 class="header__text--heading">Hello, Im a Front<span class="heading-span">End</span> Developer</h1>
      <p class="header__text--content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, qui. Lorem, ipsum dolor sit amet consectetur adipisicing elit. A, atque?</p>
      <button class="btn-section btn-outline">watch more</button>
    </div>
  </div>
  <div class="header__shadow"></div>
</header>

<main class="main py-5">
  <div class="container">
  <section class="main__skills">
      <h5 class="main__skills--subtitle">Services</h5>
      <h3 class="main__skills--title">Skills-Set</h3>
      <div class="main__skills__lines">
        </div>
        <div class="main__skills__main">
          <div class="row m-0 p-0 d-flex justify-content-between">
            <?php
        
        $homeSkill = new WP_Query(array(
          'posts_per_page' => 6,
          'post_type' => 'skill'
        ));
        
        while($homeSkill->have_posts()) {
          $homeSkill->the_post(); ?>
            <div class="card col-sm-12 col-md-6 col-lg-4">
              <div class="card-body">
                <img src="<?php $pageBannerImage = get_field('icon_box'); echo $pageBannerImage['url'] ?>" class="card-icon" alt="">
                <h5 class="card-title"><?php the_title();?></h5>
                <p class="card-text"><?php echo wp_trim_words(get_the_content(), 20); ?></p>
              </div>
            </div>
            <?php }
           ?>
</div>
</div>
</section>

    <section class="main__standards py-5">
        <div class="main__standards__main py-5">
          <div class="main__standards__main__top col-sm-12">
            <div class="row m-0 p-0">
              <div class="main__standards__main__top__left col-sm-12 col-md-6">
                <img src="<?php echo get_template_directory_uri(); ?>/img/macbook2.jpg" />
              </div>
              <div class="main__standards__main__top__right col-sm-12 col-md-6">
                <h3 class="main__standards__main__top__right--head">Design for Startups & brands.</h3>
                <div class="lines"></div>
                <p class="main__standards__main__top__right--text">In the world of startups and brands, design is the cornerstone of captivating your audience and leaving a lasting impression. It's not just about aesthetics; it's about telling your story, conveying your values, and engaging customers in a meaningful way.</p>
                <ul class="main__standards__main__top__right__list">
                  <li class="list-items">Impactful Visual Identity.</li>
                  <li class="list-items">User-Centric UX/UI.</li>
                  <li class="list-items">Consistent Branding.</li>
                </ul>
                <button class="btn-section btn-outline">watch more</button>
              </div>
            </div>
          </div>
          <div class="main__standards__main__bot col-sm-12">
            <div class="row m-0 p-0">
              <div class="main__standards__main__bot__left col-sm-12 col-md-6">
                <h3 class="main__standards__main__bot__left--head">The key to Success in the IT market</h3>
                <div class="lines"></div>
                <p class="main__standards__main__bot__left--text">One of the key aspects is the art of storytelling through design. By strategically placing the right visual elements, design aids in crafting a narrative that engages audiences on an emotional level. Understanding the deeper significance of colors, shapes, and layouts empowers designers to create messages that are not only visually appealing but also moving and inspiring.</p>
                <ul class="main__standards__main__bot__left__list">
                  <li class="list-items">Responsive Design.</li>
                  <li class="list-items">Data-Driven Iteration.</li>
                  <li class="list-items">Compelling Content Presentation.</li>
                </ul>
                <button class="btn-section btn-outline">watch more</button>
              </div>
              <div class="main__standards__main__bot__right col-sm-12 col-md-6">
                <img src="<?php echo get_template_directory_uri(); ?>/img/macbook.jpg" />
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="main__contact py-5">
        <div class="container">
          <h3 class="main__contact--header">Contact <span class="contact-span">to</span> us!</h3>
          <div class="main__contact__form col-lg-6">
            <form>
              <div class="row">
              <div class="mb-3 col-md-6">
                <input type="Name" placeholder="Name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
              </div>
              <div class="mb-3 col-md-6">
                <input type="Surname" placeholder="Surname" class="form-control" id="exampleInputSurname1" aria-describedby="surnameHelp">
              </div>
              </div>
              <div class="mb-3 two-part">
                <input type="email" placeholder="E-mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3 two-part">
                <textarea class="form-control" placeholder="Message" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <button class="btn-section btn-contact btn-outline">Stay Connected</button>
            </form>
          </div>
        </div>
      </section>
      
    </div>
    </main>
    

<?php get_footer(); ?>