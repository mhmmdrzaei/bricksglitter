<?php get_header(); ?>
<main>
  <section class="container singleEventContainer">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <section class="pageMain">
      <?php 
          if( get_field('live_video_') == 'Yes' ): ?>
             <section class="livestreamOn videoContainer">
               <?php the_field('livestream_embed_code'); ?>
             </section> 
          <?php else: ; ?>
           <figure class="eventSingleImg">
             <?php  the_post_thumbnail('large');?>
           </figure>
          <?php endif; ?>
          <section class="eventTextInfo"   aria-label="Event information including title, date, time and location">
              <h2><?php the_title(); ?></h2>
              <section class="date"   aria-label="Event Date and time">
                <section class="dateEventPage">
                  <?php 
                      $startDate = get_field('date_start');
                      $endDate = get_field('date_end');
                      if( !empty( $startDate ) ): ?>
                         <?php the_field('date_start');?> - <?php the_field('date_end'); ?><br>
                      <?php else: ; ?>
                       <?php the_field('date_end');?></br>
                      <?php endif; ?>
              </section>
              <section class="eventTime">
                  <?php 
                      $eventTime = get_field('event_time');
                      if( !empty( $eventTime ) ): ?>
                        <?php the_field('event_time'); ?>
                      <?php endif; ?>
              </section>
            </section>
            
              <?php 
              $location = get_field('event_location');
              if( $location ) { ;?>
                <section class="addresslocation"   aria-label="Event Address">
                  <?php 
                  // Loop over segments and construct HTML.
                  $address = '';
                  foreach( array('street_number', 'street_name', 'city', 'state', 'post_code', 'country') as $i => $k ) {
                      if( isset( $location[ $k ] ) ) {
                          $address .= sprintf( '<span class="segment-%s">%s</span>, ', $k, $location[ $k ] );
                      }
                  }

                  // Trim trailing comma.
                  $address = trim( $address, ', ' );

                  // Display HTML.
                  echo '<p>' . $address . '.<br> <a href="#map">↓ Map</a></p></section>';
              } 
              ;?>
              
             
                <?php if( have_rows('cta_links' ) ): ?>
                   <section class="ctaLinks"   aria-label="Links associated with event including registration links">
                    <?php while( have_rows('cta_links') ): the_row(); ?>

                    <a class="ctaLink " href="<?php the_sub_field('link_url'); ?>" target="_blank"><?php the_sub_field('link_label'); ?></a>

                    
                  <?php endwhile; ?>
                   </section>
                <?php endif; ?>
                
             
              <section class="description"   aria-label="Event Description">
                <?php the_field('description'); ?>
              </section>
          </section>
         
          <section class="imagesVideos">
            <?php if( have_rows('images_and_videos') ): ?>
                <?php while( have_rows('images_and_videos') ): the_row(); ?>
                  <?php if( get_row_layout() == 'embedded_video' ): ?>
                    <section class="videoContainer"   aria-label="Embedded content container">
                      <?php the_sub_field('content_link_video') ?>
                    </section>
                   <?php elseif( get_row_layout() == 'full_width_horizontal_image' ): ?>
                      <?php
                      $horizontalimage = get_sub_field('horizontal_image');
                      if( $horizontalimage ):

                          // Image variables.
                          $url = $horizontalimage['url'];
                          $title = $horizontalimage['title'];
                          $alt = $horizontalimage['alt'];
                          $caption = $horizontalimage['caption']; ?>
                          <figure class="fullWidthHorizontal">
                            <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>">
                            <?php  if( $caption ): ?>
                              <p class="wp-caption-text"><?php echo esc_html($caption); ?></p>
                              </div>
                          <?php endif; ?>
                          </figure>
                      <?php endif; ?>

                  <?php elseif( get_row_layout() == 'centered_vertical_image' ): ?>
                    <?php
                    $verticalimage = get_sub_field('centered_vertical_image_field');
                    if( $verticalimage ):

                        // Image variables.
                        $url = $verticalimage['url'];
                        $title = $verticalimage['title'];
                        $alt = $verticalimage['alt'];
                        $caption = $verticalimage['caption']; ?>
                        <figure class="centeredVertical">
                          <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>">
                          <?php  if( $caption ): ?>
                            <p class="wp-caption-text"><?php echo esc_html($caption); ?></p>
                            </div>
                        <?php endif; ?>
                        </figure>
                    <?php endif; ?>
                   <?php elseif( get_row_layout() == 'side_by_side_images' ): ?>
                    <section class="sidebySideImages">
                      <?php if( have_rows('select_images' ) ): ?>
                          <?php while( have_rows('select_images') ): the_row(); ?>

                            
                              <?php
                              $oneimage = get_sub_field('image_one');
                              if( $oneimage ):

                                  // Image variables.
                                  $url = $oneimage['url'];
                                  $title = $oneimage['title'];
                                  $alt = $oneimage['alt'];
                                  $caption = $oneimage['caption']; ?>
                                  <figure class="sidebySideImagesEach">
                                    <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>">
                                    <?php  if( $caption ): ?>
                                      <p class="wp-caption-text"><?php echo esc_html($caption); ?></p>
                                      </div>
                                  <?php endif; ?>
                            
                             <?php endif; ?>
                              </figure>
                              <?php
                              $twoimage = get_sub_field('image_two');
                              if( $twoimage ):

                                  // Image variables.
                                  $url = $twoimage['url'];
                                  $title = $twoimage['title'];
                                  $alt = $twoimage['alt'];
                                  $caption = $twoimage['caption']; ?>
                                  <figure class="sidebySideImagesEach">
                                    <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>">
                                    <?php  if( $caption ): ?>
                                      <p class="wp-caption-text"><?php echo esc_html($caption); ?></p>
                                      </div>
                                  <?php endif; ?> 
                            
                             <?php endif; ?>

                            </figure>
                        <?php endwhile; ?>
                      <?php endif; ?>

                    </section>

               <?php endif; ?>
             <?php endwhile; ?>
           <?php endif; ?>
          </section>
          <section class="map" id="map"   aria-label="Google Map location">
            <?php 
            $location = get_field('event_location');
            if( $location ): ?>
                <div class="acf-map" data-zoom="16">
                    <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
                </div>
            <?php endif; ?>
          </section>

       
    </section>

    <section class="pageSide"   aria-label="Event Tags, year and type of event">
      <section class="pagesideContent">
        <?php $terms = the_terms($post->ID, 'topics',''); ?>
       <section class="eventYearSingle">
         <?php the_field('event_year') ?>
       </section>
      <?php the_category(); ?>
      </section>
       
    </section>

    <?php endwhile; // end of the loop. ?>
  </section>
</main>

<?php get_footer(); ?>