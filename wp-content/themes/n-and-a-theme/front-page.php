<?php
    get_header();
 ?>


<?php $hero = get_field('hero'); ?>
 <!-- Read this first start -->
 <div class="read-this-first-sec">
      <div class="content-wrapper">
        <div class="read-this-first-sec__outer">
          <div class="read-this-first-sec__img-outer">
          <?php 
            $image = $hero['image'];
            if( $image ): ?>
              <img class="read-this-first-sec__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            <?php endif; ?>
            
          </div>
          <div class="company-value-sec">
            <div>
              <?php if($hero['sub_title']):?>
              <p class="company-value-sec__short-title"><?php echo $hero['sub_title']; ?></p>
              <?php endif ?>
              <?php if($hero['main_title']):?>
              <p class="company-value-sec__heading"><?php echo $hero['main_title']; ?></p>
              <?php endif ?>
            </div>
            <?php if(have_rows('company_values')): ?>
            <div class="company-value-sec__features-outer">
              <?php while(have_rows('company_values')): the_row();
                $title = get_sub_field('title');
                $description = get_sub_field('description');
              ?>
              <div class="company-value-sec__features-tile">
                <h3 class="company-value-sec__features-tile-head"><?php echo $title ?></h3>
                <p class="company-value-sec__features-tile-desc"><?php echo $description ?></p>
              </div>
              <?php endwhile ?>
            </div>
            
            <?php endif ?>
            
            <div>
              <a href="<?php echo $hero['link_url']; ?>" target="_blank" class="button">
              <?php if($hero['link_text']) : ?>
                <span class="button__text"><?php echo $hero['link_text']; ?></span>
                <span class="button__arrow">&gt;</span>
              <?php endif ?>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Read this first end -->

    <!-- Words to live by start -->
    <div class="fun-and-freedom-sec words-to-live-sec" style="background-image: url('<?php echo get_template_directory_uri().'/assets/images/laptop.jpg'; ?>)">
      <div class="content-wrapper">
        <div class="fun-and-freedom-sec__inner">
          <p class="fun-and-freedom-sec__top-desc">Words to live by</p>
          <h2 class="words-to-live-sec__heading">Kind words creates confidence.</h2>
          <h2 class="words-to-live-sec__heading">Kind words creates confidence.</h2>
          <h2 class="words-to-live-sec__heading">Kind words creates confidence.</h2>
      </div>
      </div>
    </div>
    <!-- Words to live by end -->

    <!-- Said about us start -->
    <div class="quotes-about">
      <div class="content-wrapper">
        <div class="quotes-about__quotes-outer">
          <div class="quotes-about__left-quotes">
              <h3 class="quotes-about__left-head">What they've said about us</h3>
              <p class="quotes-about__left-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur placeat</p>
              <a class="quotes-about__left-button" href="#">Contact Us</a>
          </div>
          <div class="slick-about-us">
            <div class="about-us-slider quotes-about__right-tile">
              <div class="about-us-slider__description">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod perferendis ullam Quod perferendis ullam"</div>
              <div class="about-us-slider__profile-outer">
                <div class="about-us-slider__img-outer">
                  <img class="about-us-slider__img" src="<?php echo get_template_directory_uri().'/assets/images/boy.jpg'; ?>">
                </div>
                <div>
                  <h3 class="about-us-slider__profile-heading">Alice Johnson</h3>
                  <p class="about-us-slider__profile-desc">Writer at ThemeNectar</p>
                </div>
              </div>
            </div>
            <div class="about-us-slider quotes-about__right-tile">
              <div class="about-us-slider__description">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod perferendis ullam Quod perferendis ullam"</div>
              <div class="about-us-slider__profile-outer">
                <div class="about-us-slider__img-outer">
                  <img class="about-us-slider__img" src="<?php echo get_template_directory_uri().'/assets/images/boy.jpg'; ?>">
                </div>
                <div>
                  <h3 class="about-us-slider__profile-heading">Alice Johnson</h3>
                  <p class="about-us-slider__profile-desc">Writer at ThemeNectar</p>
                </div>
              </div>
          </div>
          <div class="about-us-slider quotes-about__right-tile">
            <div class="about-us-slider__description">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod perferendis ullam Quod perferendis ullam"</div>
            <div class="about-us-slider__profile-outer">
              <div class="about-us-slider__img-outer">
                <img class="about-us-slider__img" src="<?php echo get_template_directory_uri().'/assets/images/boy.jpg'; ?>">
              </div>
              <div>
                <h3 class="about-us-slider__profile-heading">Alice Johnson</h3>
                <p class="about-us-slider__profile-desc">Writer at ThemeNectar</p>
              </div>
            </div>
        </div>
        <div class="about-us-slider quotes-about__right-tile">
          <div class="about-us-slider__description">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod perferendis ullam Quod perferendis ullam"</div>
          <div class="about-us-slider__profile-outer">
            <div class="about-us-slider__img-outer">
              <img class="about-us-slider__img" src="<?php echo get_template_directory_uri().'/assets/images/boy.jpg'; ?>">
            </div>
            <div>
              <h3 class="about-us-slider__profile-heading">Alice Johnson</h3>
              <p class="about-us-slider__profile-desc">Writer at ThemeNectar</p>
            </div>
          </div>
      </div>
      </div>
      </div>
      </div>
    </div>
    <!-- Said about us end -->

    <!-- Features start -->
    <div class="speciality-sec">
      <div class="content-wrapper">    
        <div class="speciality-sec__speciality-inner">
        <?php 
          $args = array(
            'numberposts' => 6,
            'post_type'   => 'massive_element',
            'order'       => 'ASC',
            'orderby'     => 'title'
          );
          $loop = new WP_Query($args);
          if($loop->have_posts()) 
          {
            while ( $post_div = $loop->have_posts() ) :
              $loop->the_post();
              $massive_image = wp_get_attachment_image_url( get_post_meta($post->ID, 'massive_image', true), 'large');
              $massive_title = get_post_meta( get_the_ID(), 'massive_title', true);
              $massive_description = get_post_meta( get_the_ID(), 'massive_description', true);
              $massive_url = get_post_meta( get_the_ID(), 'massive_url', true);
          ?>
             
          <div class="features-tile speciality-sec__speciality-tile">
          <a href="<?= (!empty( $massive_url))? $massive_url:'#'; ?>">
            <div class="features-tile__img">
              <img src="<?php echo esc_url($massive_image); ?>">
            </div>
            </a>
            <div class="features-tile__contents">
              <h3 class="features-tile__heading"><?php echo esc_html( (!empty($massive_title ))?$massive_title :'' ); ?></h3>
              <p class="features-tile__description"><?php echo esc_html( (!empty($massive_description ))?$massive_description :'' ); ?></p>
            </div>
          </div>
          
          <?php
            endwhile;
          }
          ?>
        </div>
        
      </div>
    </div>
    <!-- Features end -->

    <!-- Fun and freedom start-->
    <div class="fun-and-freedom-sec" style="background-image: url('<?php echo get_template_directory_uri().'/assets/images/friends-mountain.jpg'; ?>)">
      <div class="content-wrapper">
        <div class="fun-and-freedom-sec__inner">
          <p class="fun-and-freedom-sec__top-desc">FUN AND FREEDOM</p>
          <h2 class="fun-and-freedom-sec__heading">We Put Emphasis on having a creative work enviornment</h2>
          <a href="#" class="fun-and-freedom-sec__button">Meet The Team</a>
      </div>
      </div>
    </div>
    <!-- Fun and freedom end-->

    <!-- Our mugshots start-->
    <div class="quotes-about mugshot-sec--padding55">
      <div class="content-wrapper">
        <div class="quotes-about__quotes-outer">
          <div class="quotes-about__left-quotes mugshot-sec__left-tile">
              <h3 class="mugshot-sec__left-head">OUR MUGSHOTS</h3>
              <p class="quotes-about__left-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur placeat</p>
          </div>
          <div class="slick-about-us">
            <div class="mugshot-tile-outer">
              <div class="mugshot-tile-outer__img-outer">
                <img src="<?php echo get_template_directory_uri().'/assets/images/boy-stylish.jpg'; ?>">
              </div>
            </div>
            <div class="mugshot-tile-outer">
              <div class="mugshot-tile-outer__img-outer">
                <img src="<?php echo get_template_directory_uri().'/assets/images/stylish-girl.jpg'; ?>">
              </div>
            </div>
            <div class="mugshot-tile-outer">
              <div class="mugshot-tile-outer__img-outer">
                <img src="<?php echo get_template_directory_uri().'/assets/images/boy-stylish.jpg'; ?>">
              </div>
            </div>
            <div class="mugshot-tile-outer">
              <div class="mugshot-tile-outer__img-outer">
                <img src="<?php echo get_template_directory_uri().'/assets/images/stylish-girl.jpg'; ?>">
              </div>
            </div>
      </div>
      </div>
      </div>
    </div>
    <!-- Our mugshots end-->

    <!--Social start-->
    <div class="social-sec">
      <div class="content-wrapper">
        <div class="social-sec__inner">
          <div class="social-tile">
            <p class="social-tile__title">Don't Forget we Blog too!</p>
            <a href="#" class="social-tile__button">Read our posts</a>
          </div>
      
          <div class="social-tile social-tile--blue">
            <p class="social-tile__title">Don't Forget we Blog too!</p>
            <a href="#" class="social-tile__button">Read our posts</a>
          </div>
        </div>
        <div  class="social-sec__media-outer">
          <div class="social-sec__icons-outer">
            <div class="social-sec__icons">
              <img src="<?php echo get_template_directory_uri().'/assets/images/icons8-twitter-30.png'; ?>" alt="">
            </div>
            <div class="social-sec__icons">
              <img src="<?php echo get_template_directory_uri().'/assets/images/icons8-facebook-30.png';?>" alt="">
            </div>
            <div class="social-sec__icons">
              <img src="<?php echo get_template_directory_uri().'/assets/images/icons8-google-30.png'; ?>" alt="">
            </div>
            <div class="social-sec__icons">
              <img src="<?php echo get_template_directory_uri().'/assets/images/icons8-instagram-32.png'; ?>" alt="">
            </div>
          </div>
          <div class="social-sec__media-note">@ 2020 Salient Business 2.</div>
         </div>
      </div>
     </div>
    <!--Social end-->

    <?php
     get_footer();
    ?>