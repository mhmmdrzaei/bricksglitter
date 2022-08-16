<?php get_header();  ?>
<main>
<section class="container">
   <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <?php if( have_rows('home_page_header_image' ) ): ?>
            <?php while( have_rows('home_page_header_image') ): the_row(); ?>

            <?php
            $desktopImg = get_sub_field('desktop_version');
            if( $desktopImg ):

                // Image variables.
                $url = $desktopImg['url'];
                $title = $desktopImg['title'];
                $alt = $desktopImg['alt'];
                $caption = $desktopImg['caption']; ?>
                <figure class="desktopImg">
                  <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>">
                  <a href="#eventsStart"><section class="eventsDown">
                      Upcoming Events
                  </section></a>
               </figure>
            <?php endif; ?>
            <?php
            $mobileImg = get_sub_field('mobile_version');
            if( $mobileImg ):

                // Image variables.
                $url = $mobileImg['url'];
                $title = $mobileImg['title'];
                $alt = $mobileImg['alt'];
                $caption = $mobileImg['caption']; ?>
                <figure class="mobileImg">
                  <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>">
                  <a href="#eventsStart"><section class="eventsDown">
                      Upcoming Events
                  </section></a>
               </figure>
            <?php endif; ?>
            <section class="homepageContainer" id="eventsStart">
            <?php if( have_rows('home_page_content') ): ?>
                <?php while( have_rows('home_page_content') ): the_row(); ?>
                  <?php if( get_row_layout() == 'full_width_events_post' ): ?>
                     <?php $featured_posts = get_sub_field('full_width_event_post_select');
                     ?>
                       <?php   if( $featured_posts ) {
                           $post = $featured_posts;
                           setup_postdata($post);
                        ?>
                         <section class="fullwidthpost" aria-label="featured information container">
 
                            <?php $terms = the_terms($post->ID, 'topics',''); ?>

                           <?php 
                               $embedCode = get_field('livestream_embed_code');
                               if( !empty( $embedCode ) ): ?>
                                  <section class="livestreamOnHome">
                                    <?php the_field('livestream_embed_code'); ?>
                                  </section> 
                               <?php else: ; ?>
                                <figure class="eventSingleImgHome">
                                <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
                                  <?php  the_post_thumbnail('large');?>
                                </a>
                                </figure>
                               <?php endif; ?>
                           <section class="enteryinfo">
                            <section class="titleInfo">
                                <h2 class="entry-title" aria-label="featured item title">
                                  <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
                                    <?php the_title(); ?>
                                  </a>
                                </h2>

                                <section class="dateCalendar">
                                    <section class="eventDateCalendar">
                                      <?php 
                                          $startDate = get_field('date_start');
                                          $endDate = get_field('date_end');
                                          if( !empty( $endDate ) ): ?>
                                             <?php the_field('date_start');?> - <?php the_field('date_end'); ?><br>
                                          <?php else: ; ?>
                                           <?php the_field('date_start');?></br>
                                          <?php endif; ?>
                                  </section>
                                  <section class="eventTimeCalendar">
                                      <?php 
                                          $eventTime = get_field('event_time');
                                          if( !empty( $eventTime ) ): ?>
                                            <?php the_field('event_time'); ?>
                                          <?php endif; ?>
                                  </section>
                            </section>
                        </section>
                              
                              <section class="postexcerpt">
                                 <?php 
                                    $project_desc = get_field( 'description' );
                                    if( !empty( $project_desc ) ):
                                        $trimmed_text = wp_trim_excerpt_modified( $project_desc, 30 );
                                        $last_space = strrpos( $trimmed_text, ' ' );
                                        $modified_trimmed_text = substr( $trimmed_text, 0, $last_space );
                                        echo $modified_trimmed_text . '...';
                                    endif; 


                                  ?>
                                  <br><br><a class="readmoreLink"href="<?php the_permalink(); ?>">More Information &#8594</a>

                              </section>
                           </section>

                           
   
                            </section>

                         <?php  wp_reset_postdata(); ?> 
                       <?php  } ?>


                     <?php elseif( get_row_layout() == 'half_width_event_post' ): ?>
                        <?php $featuredHalf_posts = get_sub_field('half_width_event_post_select');
                        ?>
                          <?php   if( $featuredHalf_posts ) {
                              $post = $featuredHalf_posts;
                              setup_postdata($post);
                           ?>
                            <section class="halfwidthpost"  aria-label="featured information container">
                              <?php the_terms( $post->ID, 'topics', ' ' ); ?>

                             <figure class="eventSingleImgHome">
                                <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
                               <?php  the_post_thumbnail('large');?>
                           </a>
                             </figure>

                              <section class="enteryinfo">
                                 <h2 class="entry-title" aria-label="featured item title">
                                   <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
                                     <?php the_title(); ?>
                                   </a>
                                 </h2>
                                 <section class="postexcerpt">
                                    <?php 
                                       $project_desc = get_field( 'description' );
                                       if( !empty( $project_desc ) ):
                                           $trimmed_text = wp_trim_excerpt_modified( $project_desc, 30 );
                                           $last_space = strrpos( $trimmed_text, ' ' );
                                           $modified_trimmed_text = substr( $trimmed_text, 0, $last_space );
                                           echo $modified_trimmed_text . '...';
                                       endif; 


                                     ?>
                                     <br><br><a class="readmoreLink"href="<?php the_permalink(); ?>">More Information &#8594</a>

                                 </section>
                                     <section class="dateCalendar">
                                         <section class="eventDateCalendar">
                                           <?php 
                                               $startDate = get_field('date_start');
                                               $endDate = get_field('date_end');
                                               if( !empty( $endDate ) ): ?>
                                                  <?php the_field('date_start');?> - <?php the_field('date_end'); ?><br>
                                               <?php else: ; ?>
                                                <?php the_field('date_start');?></br>
                                               <?php endif; ?>
                                       </section>
                                       <section class="eventTimeCalendar">
                                           <?php 
                                               $eventTime = get_field('event_time');
                                               if( !empty( $eventTime ) ): ?>
                                                 <?php the_field('event_time'); ?>
                                               <?php endif; ?>
                                       </section>
                                 </section>
                              </section>

                              
                   
                               </section>

                            <?php  wp_reset_postdata(); ?> 
                          <?php  } ?>

                          <?php elseif( get_row_layout() == 'half_width_announcement' ): ?>
                           <?php if( have_rows('half_width_announcement_post' ) ): ?>
                               <?php while( have_rows('half_width_announcement_post') ): the_row(); ?>
                                 <section class="halfwidthAnnouncement">
                                    <h3 class="announcement"><i>Announcement</i></h3>
                                    <section class="halfwidthAnnoucementContent">
                                       <section class="announcementText">
                                          <?php the_sub_field('annoucement_text'); ?>
                                       </section>
                                       <section class="annoucementCTAS">
                                          <?php if( have_rows('cta_links_announcement' ) ): ?>
                                              <?php while( have_rows('cta_links_announcement') ): the_row(); ?>

                                              <a class="ctaLink" href="<?php the_sub_field('link_url_announcement'); ?>" target="_blank"><?php the_sub_field('link_label_annoucement'); ?></a>

                                              
                                            <?php endwhile; ?>
                                          <?php endif; ?>
                                       </section>
                                    </section>
                                 </section>

                               
                             <?php endwhile; ?>
                           <?php endif; ?>


                           <?php elseif( get_row_layout() == 'full_width_announcement' ): ?>
                            <?php if( have_rows('full_width_announcement_post' ) ): ?>
                                <?php while( have_rows('full_width_announcement_post') ): the_row(); ?>
                                  <section class="fullwidthAnnouncement">
                                     <h3 class="announcement"><i>Announcement</i></h3>
                                     <section class="halfwidthAnnoucementContent">
                                        <section class="announcementText">
                                           <?php the_sub_field('annoucement_text_full'); ?>
                                        </section>
                                        <section class="annoucementCTAS">
                                           <?php if( have_rows('cta_links_announcement_full' ) ): ?>
                                               <?php while( have_rows('cta_links_announcement_full') ): the_row(); ?>

                                               <a class="ctaLink" href="<?php the_sub_field('link_url_announcement_full'); ?>" target="_blank"><?php the_sub_field('link_label_annoucement_full'); ?></a>

                                               
                                             <?php endwhile; ?>
                                           <?php endif; ?>
                                        </section>
                                     </section>
                                  </section>

                                
                              <?php endwhile; ?>
                            <?php endif; ?>
                         <?php endif; ?>
                      <?php endwhile; ?>



            <?php endif; ?>

          <?php endwhile; ?>
        <?php endif; ?>
    </section>
   <?php endwhile; // end the loop?>
</section>
</main>


<?php get_footer(); ?>