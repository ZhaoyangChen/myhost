<?php

add_action('widgets_init','register_st_blog_posts_widget');

function register_st_blog_posts_widget()
{
	register_widget('ST_Blog_Posts_Widget');
}

class ST_Blog_Posts_Widget extends WP_Widget{

	function ST_Blog_Posts_Widget()
	{
		$this->WP_Widget( 'ST_Blog_Posts_Widget','ST Blog Posts',array('description' => 'ST post widget to display blog posts'));
	}


	/*-------------------------------------------------------
	 *				Front-end display of widget
	 *-------------------------------------------------------*/

	function widget($args, $instance)
	{
		extract($args);

		$title 			= apply_filters('widget_title', $instance['title'] );
		$count 			= $instance['count'];
		$order_by 		= $instance['order_by'];
		
		echo $before_widget;

		$output = '';

		if ( $title )
			echo $before_title . $title . $after_title;

		global $post;

		if ( $order_by == 'latest' ) {

			$args = array( 
				'posts_per_page' => $count,
				'order' => 'DESC'
				);

		} else if ( $order_by == 'popular' ) {

			$args = array( 
				'orderby' => 'meta_value_num',
				'meta_key' => 'post_views_count',
				'posts_per_page' => $count,
				'order' => 'DESC'
				);

		} else {

			$args = array( 
				'orderby' => 'comment_count',
				'order' => 'DESC',
				'posts_per_page' => $count
				);

		}


		$posts = get_posts( $args );

		if(count($posts)>0){
			$output .='<div class="latest-posts ' . $order_by . '">';

			foreach ($posts as $post): setup_postdata($post);
				$output .='<div class="media">';

					if(has_post_thumbnail()):
						$output .='<div class="pull-left">';
						$output .='<a href="'.esc_url(get_permalink()).'">'.get_the_post_thumbnail( get_the_ID(), 'xs-thumb', array('class' => 'img-responsive')).'</a>';
						$output .='</div>';
					endif;

					$output .='<div class="media-body">';
					$output .= '<h3 class="entry-title"><a href="'.esc_url(get_permalink()).'">'. get_the_title() .'</a></h3>';
					$output .= '<div class="entry-meta small">' . get_the_time() . ', ' . get_the_date('d M Y') . '</div>';
					$output .='</div>';

				$output .='</div>';
			endforeach;

			wp_reset_postdata();

			$output .='</div>';
		}


		echo $output;

		echo $after_widget;
	}


	function update( $new_instance, $old_instance )
	{
		$instance = $old_instance;

		$instance['title'] 			= strip_tags( $new_instance['title'] );
		$instance['order_by'] 		= strip_tags( $new_instance['order_by'] );
		$instance['count'] 			= strip_tags( $new_instance['count'] );

		return $instance;
	}


	function form($instance)
	{
		$defaults = array( 
			'title' 	=> 'Latest Posts',
			'order_by' 	=> 'latest',
			'count' 	=> 5
		);
		$instance = wp_parse_args( (array) $instance, $defaults );
	?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Widget Title', 'shaped_theme'); ?></label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'order_by' ); ?>"><?php _e('Ordered By', 'shaped_theme'); ?></label>
			<?php 
				$options = array(
					'popular' 	=> 'Popular',
					'latest' 	=> 'Latest', 
					'comments'	=> 'Most Commented'
					);
				if(isset($instance['order_by'])) $order_by = $instance['order_by'];
			?>
			<select class="widefat" id="<?php echo $this->get_field_id( 'order_by' ); ?>" name="<?php echo $this->get_field_name( 'order_by' ); ?>">
				<?php
				$op = '<option value="%s"%s>%s</option>';

				foreach ($options as $key=>$value ) {

					if ($order_by === $key) {
			            printf($op, $key, ' selected="selected"', $value);
			        } else {
			            printf($op, $key, '', $value);
			        }
			    }
				?>
			</select>
		</p>

		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'count' )); ?>"><?php _e('Count', 'shaped_theme'); ?></label>
			<input id="<?php echo esc_attr($this->get_field_id( 'count' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'count' )); ?>" value="<?php echo esc_attr($instance['count']); ?>" style="width:100%;" />
		</p>

	<?php
	}
}