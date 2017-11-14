<?php
/**
 * Default Events Template
 * This file is the basic wrapper template for all the views if 'Default Events Template'
 * is selected in Events -> Settings -> Template -> Events Template.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/default-template.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

get_header();
?>
<section class="event-section">
		<div id="tribe-events-pg-template" class="tribe-events-pg-template">
			<?php tribe_events_before_html(); ?>
			<?php tribe_get_view(); ?>
			<?php tribe_events_after_html(); ?>
		</div> <!-- #tribe-events-pg-template -->
</section>


<?php
$args = array(
  'posts_per_page'   => '',
  'offset'           => '',
  'category'         => '',
  'orderby'          => 'date',
  'order'            => 'DESC',
  'include'          => '',
  'exclude'          => '',
  'meta_key'         => '',
  'meta_value'       => '',
  'post_type'        => 'tribe_events',
  'post_mime_type'   => '',
  'post_parent'      => '',
  'author'           => '',
  'author_name'      => '',
  'post_status'      => 'publish',
  'suppress_filters' => true,
);

$events = get_posts($args);
?>

<section>
  <div class="comingEventTitle">
    <div class="dash"></div>
    <p>UPCOMING EVENTS</p>
  </div>
  <div class="events">
    <?php foreach($events as $event): ?>
      <div class="workshop-cont not-in-slider">
        <!-- <picture class="event-image" style="background-image: url(<?php echo get_the_post_thumbnail_url($event->ID); ?>)"></picture> -->
        <img src="<?php echo get_the_post_thumbnail_url($event->ID); ?>" alt="">
        <article class="padded-text">
          <h1><?php echo $event->post_title ?></h1>
          <p class="event-title"><?php echo tribe_events_event_schedule_details( $event->ID, '<p class="title">', '</p>' ); ?></p>
          
          <p><?php echo substr($event->post_content, 0, 200); ?></p>
          <!-- <a class="no-underline" href="<?php echo get_permalink($event->ID); ?>"><button>Read More</button></a> -->
        </article>
      </div>
    <?php endforeach ?>
  </div>
</section>





<?php
get_footer();
