<?php
  $address_heading = '';
  $address_title = '';
  $address_value = '';
  $phone_title = '';
  $phone_number = '';
  $email_title = '';
  $email = '';
  $quick_links_title = '';
  $quick_links = [];
  $location_title = '';
  $location_url = '';
  $copy_right = '';

  
  $location_image = get_field('location_image','option');
  $address_heading = get_field('address_heading','option');
  $address_title = get_field('address_title','option');
  $address_value = get_field('address_value','option');
  $phone_title = get_field('phone_title','option');
  $phone_number = get_field('phone_number','option');
  $email_title = get_field('email_title','option');
  $email = get_field('email','option');
  $quick_links_title = get_field('quick_links_title','option');
  $quick_links = get_field('quick_links','option');
  $location_title = get_field('location_title','option');
  $copy_right = get_field('copy_right','option');

?>


<!-- Footer start -->
<div>
      <div class="content-wrapper">
        <div class="footer-sec">
          <div class="footer-sec__outer footer-sec__first-tile">
            <div>
              <div class="footer-tile footer-sec__first-tile">
              
                <div class="footer-tile__head"> 
                <?php echo esc_html( (!empty($address_heading ))?$address_heading :'' ); ?>                
                </div>
             
                <div>
                  <p><span class="footer-tile__desc-title"><?php echo esc_html( (!empty($address_title ))?$address_title :'' ); ?>  </span><span class="footer-tile__desc"><?php echo esc_html( (!empty($address_value ))?$address_value :'' ); ?> </span></p>
                  <p><span class="footer-tile__desc-title"><?php echo esc_html( (!empty($phone_title ))?$phone_title :'' ); ?> </span><span class="footer-tile__desc"><?php echo esc_html( (!empty($phone_number ))?$phone_number :'' ); ?> </span></p>
                  <p><span class="footer-tile__desc-title"><?php echo esc_html( (!empty($email_title ))?$email_title :'' ); ?> </span><span class="footer-tile__desc"><?php echo esc_html( (!empty($email ))?$email :'' ); ?> </span></p>
                </div>
              </div>
              <!-- <div class="footer-tile">
                <div class="footer-tile__head">
                  OMAN
                </div>
                <div>
                  <p><span class="footer-tile__desc-title">Address: </span><span class="footer-tile__desc">Nils & Abbas Trading Co. LLC</span></p>
                  <p><span class="footer-tile__desc-title">Phone: </span><span class="footer-tile__desc">+97143390044</span></p>
                  <p><span class="footer-tile__desc-title">Email: </span><span class="footer-tile__desc">sales@nilsabbas.com</span></p>
                </div>
              </div> -->
            </div>
            <div class="footer-tile">
              <div class="footer-tile__head">
              <?php echo esc_html( (!empty($quick_links_title ))?$quick_links_title :'' ); ?>
              </div>
              <div>
                <ul class="footer-tile__desc-title">
                  <?php if(!empty($quick_links)): 
                    foreach($quick_links as $link_id){
                      echo '<li>
                      <a href="'.get_permalink($link_id).'">'.get_the_title($link_id).'</a>
                      </li>';
                    }            
                   endif ?>
                </ul>
              </div>
            </div>
            <div class="footer-tile">
              <div class="footer-tile__head">
              <?php echo esc_html( (!empty($location_title ))?$location_title :'' ); ?>
              </div>
              <div class="footer-sec__img-outer">
                <?php if(!empty($location_image)): ?>
                <img src="<?php echo esc_url($location_image['url']); ?>" alt="<?php echo esc_attr($location_image['alt']); ?>">
                <?php endif ?>
              </div>
            </div>
          </div>
          <!-- <div class="footer-sec__outer"> -->
              <!-- <div class="footer-tile footer-sec__blink">
                  <p class="footer-sec__address">24 HOURS SERVICE HOTLINE</p>
                  <p class="footer-sec__address">UAE +971 4321 1272</p>
                  <p class="footer-sec__address">servicehotline@nilsabbas.com</p>
              </div> -->
            <!-- <div class="footer-tile">
              <div class="footer-tile__head">
                ABUDHABI
              </div>
              <div>
                <p><span class="footer-tile__desc-title">Address: </span><span class="footer-tile__desc">Nils & Abbas Trading Co. LLC</span></p>
                <p><span class="footer-tile__desc-title">Phone: </span><span class="footer-tile__desc">+97143390044</span></p>
                <p><span class="footer-tile__desc-title">Email: </span><span class="footer-tile__desc">sales@nilsabbas.com</span></p>
              </div>
            </div> -->
            <!-- <div class="footer-tile footer-sec__hidden footer-sec__blink">
              <p class="footer-sec__address">24 HOURS SERVICE HOTLINE</p>
              <p class="footer-sec__address">UAE +971 4321 1272</p>
              <p class="footer-sec__address">servicehotline@nilsabbas.com</p>
          </div> -->
          <!-- </div> -->
        </div>
      </div>  
      
      <div class="footer-sec__copyright">
      <?php echo esc_html( (!empty($copy_right))?$copy_right :'' ); ?>
      </div>      
    </div>
    <!-- Footer end -->
    <!-- body content end -->

    <!-- scripts -->
   <?php
    wp_footer();
   ?>
    <!-- scripts -->
  </body>
</html>
