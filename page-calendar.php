
<?php get_header();  ?>
<?php $today = current_time('Ymd'); ?>
<main class="calendarPage">
  <section class="container calendarContainer">
  <?php // Start the loop ?>

    <?php $args = array( 
      'post_type' => array('events'),
          'meta_query' => array(
            'relation' => 'AND',
          'start_clause' => array(
                'key'   => 'date_end',
                'compare' => '>=',
                'value'   => $today
            ),
            'end_clause' => array(
                'key'   => 'date_end',
                'compare' => '>=',
                'value'   => $today
            )
          ),
          'orderby' => array(
              'meta_value_num' => 'asc',
              'post_date' => 'asc'
          ),
          'posts_per_page' => -1
          // 'orderby' => 'meta_value_num',
          // 'order' => 'asc'
 );
      query_posts( $args ); // hijack the main loop

      if ( ! have_posts() ) : ?>

  <article id="post-0" class="calendarPosts" aria-label="no events listed at this time">
     <section class="excerptPosts fullwidthexcerpts">
      <p>Apologies, there are no upcoming events right now.<br>Check back soon!</p>
    </section><!-- .entry-content -->
  </article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>
<?php // if there are posts, Start the Loop. ?>
  <h2 class="headerCalendar">Upcoming:</h2>
<?php while ( have_posts() ) : the_post(); ?>


    <article id="post-<?php the_ID(); ?>" class="calendarEvent" aria-label="Event information container">
      <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
      <section class="dateCalendar"aria-label="Event Date and time listed in this container ">
          <section class="eventDateCalendar">
            <?php 
                $startDate = get_field('date_start');
                $endDate = get_field('date_start');
                if( !empty( $endDate ) ): ?>
                   <?php the_field('date_start');?> - <?php the_field('date_end'); ?><br>
                <?php else: ; ?>
                 <?php the_field('date_end');?></br>
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
      <section class="infoCalendar" >
        <h3 class="entry-title" aria-label="event name">
            <?php the_title(); ?>
        </h3>
        <section class="eventDescriptionCalendar"aria-label="Event Description">
          <?php 
             $project_desc = get_field( 'description' );
             if( !empty( $project_desc ) ):
                 $trimmed_text = wp_trim_excerpt_modified( $project_desc, 30 );
                 $last_space = strrpos( $trimmed_text, ' ' );
                 $modified_trimmed_text = substr( $trimmed_text, 0, $last_space );
                 echo $modified_trimmed_text . '...';
             endif; 


           ?>
        </section>
      </section>
      <section class="eventTypeCalendar" aria-label="Tagged Event Type">
        <?php $terms = the_terms($post->ID, 'topics',''); ?>
      </section>
       <a class="calendargoLink" href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
      <section class="goCalendar">
        <span>&#8594</span>
      </section>
         </a>
    </article>

<?php endwhile; // End the loop. Whew. ?>

  <?php wp_reset_query();?> 
</section>
</main>

<?php get_footer(); ?>