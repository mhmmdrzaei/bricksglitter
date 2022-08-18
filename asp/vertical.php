<?php
/* Prevent direct access */
defined('ABSPATH') or die("You can't access this file directly.");

/**
 * This is the default template for one vertical result
 *
 * !!!IMPORTANT!!!
 * Do not make changes directly to this file! To have permanent changes copy this
 * file to your theme directory under the "asp" folder like so:
 *    wp-content/themes/your-theme-name/asp/vertical.php
 *
 * It's also a good idea to use the actions to insert content instead of modifications.
 *
 * WARNING: Modifying anything in this file might result in search malfunctioning,
 * so be careful and use your test environment.
 *
 * You can use any WordPress function here.
 * Variables to mention:
 *      Object() $r - holding the result details
 *      Array[]  $s_options - holding the search options
 *
 * I DO NOT RECOMMEND PUTTING ANYTHING BEFORE OR AFTER THE
 * <div class='item'>..</div><div class="asp_spacer"></div> structure
 *
 * You can leave empty lines for better visibility, they are cleared before output.
 *
 * MORE INFO: https://wp-dreams.com/knowledge-base/result-templating/
 *
 * @since: 4.0
 */
?>


<div class='archiveItemEach item<?php echo apply_filters('asp_result_css_class', $asp_res_css_class, $r->id, $r); ?>' aria-label="Listed Item Container, with a featured image of the event and the event title">

    <?php do_action('asp_res_vertical_begin_item'); ?>


       <figure class="featuredImageResutl">
           <img src="<?php echo esc_attr($r->image); ?>" alt="Image for the event <?php echo $r->title; ?>">
       </figure>
       <h3><a class="asp_res_url" href='<?php echo $r->link; ?>'<?php echo ($s_options['results_click_blank'])?" target='_blank'":""; ?>>
               <?php echo $r->title; ?>
               <?php if ($s_options['resultareaclickable'] == 1): ?>
               
               <?php endif; ?>
               <span>&#8594</span>
       </a></h3>


       </div>



    <?php do_action('asp_res_vertical_after_content'); ?>



    <?php do_action('asp_res_vertical_end_item'); ?>

