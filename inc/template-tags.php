<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package projectsoul
 */

if ( ! function_exists( 'projectsoul_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function projectsoul_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Posted on %s', 'post date', 'projectsoul' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'projectsoul' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'projectsoul_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function projectsoul_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'projectsoul' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'projectsoul' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'projectsoul' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'projectsoul' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'projectsoul' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'projectsoul' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;




// Tribe Calendar
if ( class_exists( 'Tribe__Events__Main' ) ) {
	
			// Custom Next Month
			function custom_events_the_next_month_link() {
					$html = '';
					$url  = tribe_get_next_month_link();
					$text = tribe_get_next_month_text();
					$text = substr($text,0,3);
	
					// Check if $url is populated (an empty string may indicate the date was out-of-bounds, ie on 32bit servers)
					if ( ! empty( $url ) ) {
							$date = Tribe__Events__Main::instance()->nextMonth( tribe_get_month_view_date() );
							if ( $date <= tribe_events_latest_date( Tribe__Date_Utils::DBYEARMONTHTIMEFORMAT ) ) {
									$html = '<a data-month="' . $date . '" href="' . esc_url( $url ) . '" rel="next">' . $text . '</a>';
							}
					}
	
					echo apply_filters( 'custom_events_the_next_month_link', $html );
			}
	
			// Custom Next Next Month
			function custom_events_the_next_next_month_link() {
					$html = '';
					$url  = tribe_get_next_month_link();
					$text = tribe_get_next_month_text();
					$text = substr($text,0,3);
	
					// Check if $url is populated (an empty string may indicate the date was out-of-bounds, ie on 32bit servers)
					if ( ! empty( $url ) ) {
							$date = Tribe__Events__Main::instance()->nextMonth( tribe_get_month_view_date() );
							if ( $date <= tribe_events_latest_date( Tribe__Date_Utils::DBYEARMONTHTIMEFORMAT ) ) {
									$html = '<a data-month="' . $date . '" href="' . esc_url( $url ) . '" rel="next">' . $text . '</a>';
							}
					}
	
					echo apply_filters( 'custom_events_the_next_next_month_link', $html );
			}
	
			// Custom Next Month URL
			function custom_events_the_next_month_url() {
					$html = '';
					$url  = tribe_get_next_month_link();
	
					// Check if $url is populated (an empty string may indicate the date was out-of-bounds, ie on 32bit servers)
					if ( ! empty( $url ) ) {
							$date = Tribe__Events__Main::instance()->nextMonth( tribe_get_month_view_date() );
							if ( $date <= tribe_events_latest_date( Tribe__Date_Utils::DBYEARMONTHTIMEFORMAT ) ) {
									$html = esc_url( $url );
							}
					}
	
					echo apply_filters( 'custom_events_the_next_month_url', $html );
			}
	
			
	
			// Custom Previous Month URL
			function custom_events_the_previous_month_url() {
					$html = '';
					$url  = tribe_get_previous_month_link();
					$date = Tribe__Events__Main::instance()->previousMonth( tribe_get_month_view_date() );
					$earliest_event_date = tribe_events_earliest_date( Tribe__Date_Utils::DBYEARMONTHTIMEFORMAT );
	
					// Only form the link if a) we have a known earliest event date and b) the previous month date is the same or later
					if ( $earliest_event_date && $date >= $earliest_event_date ) {
							$text = tribe_get_previous_month_text();
							$html = esc_url( $url );
					}
	
					echo apply_filters( 'custom_events_the_previous_month_url', $html );
			}
	
			function custom_get_next_next_month_link() {
					global $wp_query;
					
					$current_date = $wp_query->query['eventDate'];
					$current_date = $current_date . '-01';
					$dateObj = new DateTime($current_date);
					$newDate = $dateObj->add(new DateInterval('P02M'));
					$newDate = $newDate->format('Y-m'); 
					
					$output = get_home_url() . '/events/' . $newDate . '/';
	
					return apply_filters( 'custom_get_next_next_month_link', $output );
			}
	
	
	} // Tribe Calendar