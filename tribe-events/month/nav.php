<?php
/**
 * Month View Nav Template
 * This file loads the month view navigation.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/month/nav.php
 *
 * @package TribeEventsCalendar
 * @version 4.2
 *
 */


if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>

<?php do_action( 'tribe_events_before_nav' ) ?>

<h3 class="screen-reader-text" tabindex="0"><?php esc_html_e( 'Calendar Month Navigation', 'the-events-calendar' ) ?></h3>

<ul class="tribe-events-sub-nav">

	<li><span class="fa cal-nav"><a href="<?php custom_events_the_previous_month_url(); ?>">&#xf104;</a></span></li>

	<li class="tribe-events-nav-current month" aria-label="current month link">
		<?php $output = date( 'M', strtotime( tribe_get_month_view_date() ) ); echo $output;?>
	</li>

	<li class="tribe-events-nav-next month" aria-label="next month link">
		<?php custom_events_the_next_month_link(); ?>
	</li>

	<!-- <li class="tribe-events-nav-next month" aria-label="next month link">
		<a data-month="2018-01" href="<?php echo custom_get_next_next_month_link();?>" rel="next">NEXT</a>
	</li> -->

	<li><span class="fa cal-nav"><a href="<?php custom_events_the_next_month_url(); ?>">&#xf105;</a></span></li>

</ul><!-- .tribe-events-sub-nav -->

<?php
do_action( 'tribe_events_after_nav' );

