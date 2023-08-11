<?php /* Template Name: Contact - Portfolio */?>

<?php get_header(); ?>


<div class="section-baner">
  <div class="section-baner__img" style="background-image: url(<?php $pageBannerImage = get_field('page_banner_background_image'); echo $pageBannerImage['url'] ?>);">
    <p class="section-baner__img--section-name"><?php the_title(); ?></p>
    <p class="section-baner__img--text"><?php the_field('page_banner_subtitle') ?></p>
    <div class="hero-shadow"></div>
    </div>
</div>

<div class="subpage pt-5">
  <section class="subpage__contact-page">
    <div class="container">
    <h3 class="subpage__contact-page--heading"><a href=""><?php the_title(); ?></a></h3>
    <div class="subpage__contact-page__content">
      <h2 class="subpage__contact-page__content--head">We're here to help <br class="d-none d-lg-block"> you level up</h2>
      <div class="row m-0 p-0">

        <div class="subpage__contact-page__content__left col-lg-4">
          <p class="subpage__contact-page__content__left--text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat inventore ullam id, quis necessitatibus tenetur doloribus temporibus accusamus suscipit nam reprehenderit animi exercitationem voluptatibus ratione dicta mollitia nesciunt! Beatae delectus deserunt mollitia! Voluptatibus reiciendis sint temporibus, dolores dolor mollitia, magnam magni nostrum neque facilis dolore doloremque vitae deserunt tempora voluptatum!
        </p>
      </div>
      <div class="col-lg-1"></div>
      <div class="subpage__contact-page__content__right col-lg-7">
        <form>
          <div class="row">
          <div class="form-left col-lg-7">

            <div class="mb-3">
              <label for="exampleInputName" class="form-label">What's your name?</label>
              <input type="name" placeholder="Here you should enter your name" class="form-control" id="exampleInputName">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Your email</label>
              <input type="email" placeholder="Here you should enter your email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

          </div>

          <div class="form-right col-lg-5">
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">What can we help you with?</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button class="btn btn-outline contactme-btn">Click me</button>
          </div>
         </div>
      </form>
    </div>
  </div>
</div>   
</div>
</section>

<section class="subpage__follow-us py-5">
            <div class="container">
                <div class="row">
                    <div class="subpage__follow-us__content-icons col-sm-12 col-md-12 col-lg-6">
                        <h5 class="subpage__follow-us__content-icons--heading">follow us</h5>
                        <div class="subpage__follow-us__content-icons--box">
                            <a href="https://pl-pl.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                        </div>
                        <div class="subpage__follow-us__content-icons--box">
                            <a href="https://twitter.com/?lang=pl"><i class="fa-brands fa-twitter"></i></a>
                        </div>
                        <div class="subpage__follow-us__content-icons--box">
                            <a href="https://google.com/"><i class="fa-brands fa-google-plus-g"></i></a>
                        </div>
                        <div class="subpage__follow-us__content-icons--box">
                            <a href="https://pinterest.com/"><i class="fa-brands fa-pinterest"></i></a>
                        </div>
                    </div>
                    <div class="subpage__follow-us__content-text col-sm-12 col-md-12 col-lg-6">
                        <h5 class="subpage__follow-us__content-text--heading">get the newsletter</h5>
                        <div class="subpage__follow-us__content-text__form">
                            <form class="row g-3">

                                <div class="col-auto subpage__follow-us__content-text__form--email">
                                    <label for="inputPassword2" class="visually-hidden">Your email address</label>
                                    <input type="text" class="form-control" id="inputPassword2"
                                        placeholder="Your email address">
                                </div>
                                <div class="col-auto subpage__follow-us__content-text__form--button">
                                    <button type="submit" class="btn mb-3 btn-subscribe">subscribe</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>


<?php get_footer(); ?>