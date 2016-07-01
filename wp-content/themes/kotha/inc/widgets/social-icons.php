<?php


    //---------------------------------------------------------------------------
    // Social icons widget
    //---------------------------------------------------------------------------

    class ST_social_Widget extends WP_Widget
    {

        public function __construct() {
            parent::__construct(
                'st_social_button', // Base ID
                __('ST Social Icons', 'shaped_theme'), // Name
                array('description' => __('Displaying social icons', 'shaped_theme'),) // Args
            );
        }

        public function form($instance) {

            $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
            $facebook      = (isset($instance[ 'facebook' ])) ? $instance[ 'facebook' ] : ''; 
            $twitter      = (isset($instance[ 'twitter' ])) ? $instance[ 'twitter' ] : ''; 
            $google      = (isset($instance[ 'google' ])) ? $instance[ 'google' ] : ''; 
            $pinterest      = (isset($instance[ 'pinterest' ])) ? $instance[ 'pinterest' ] : ''; 
            $dribbble      = (isset($instance[ 'dribbble' ])) ? $instance[ 'dribbble' ] : ''; 
            $behance      = (isset($instance[ 'behance' ])) ? $instance[ 'behance' ] : '';
            $youtube      = (isset($instance[ 'youtube' ])) ? $instance[ 'youtube' ] : '';

            ?>
            
            <p>
                <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e('Title :', 'shaped_theme'); ?></label>
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_html($title); ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Enter facebook URL:', 'shaped_theme'); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo esc_attr($facebook); ?>">
            </p>
            <p>
                <label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e('Enter twitter URL:', 'shaped_theme'); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo esc_attr($twitter); ?>">
            </p>
            <p>
                <label for="<?php echo $this->get_field_id('google'); ?>"><?php _e('Enter google URL:', 'shaped_theme'); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id('google'); ?>" name="<?php echo $this->get_field_name('google'); ?>" type="text" value="<?php echo esc_attr($google); ?>">
            </p>
            <p>
                <label for="<?php echo $this->get_field_id('pinterest'); ?>"><?php _e('Enter pinterest URL:', 'shaped_theme'); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id('pinterest'); ?>" name="<?php echo $this->get_field_name('pinterest'); ?>" type="text" value="<?php echo esc_attr($pinterest); ?>">
            </p>
            <p>
                <label for="<?php echo $this->get_field_id('dribbble'); ?>"><?php _e('Enter dribbble URL:', 'shaped_theme'); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id('dribbble'); ?>" name="<?php echo $this->get_field_name('dribbble'); ?>" type="text" value="<?php echo esc_attr($dribbble); ?>">
            </p>
            <p>
                <label for="<?php echo $this->get_field_id('behance'); ?>"><?php _e('Enter behance URL:', 'shaped_theme'); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id('behance'); ?>" name="<?php echo $this->get_field_name('behance'); ?>" type="text" value="<?php echo esc_attr($behance); ?>">
            </p>
            <p>
                <label for="<?php echo $this->get_field_id('youtube'); ?>"><?php _e('Enter youtube URL:', 'shaped_theme'); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id('youtube'); ?>" name="<?php echo $this->get_field_name('youtube'); ?>" type="text" value="<?php echo esc_attr($youtube); ?>">
            </p>

        <?php
        }

        public function update($new_instance, $old_instance)
        {
            $instance                 = array();
            $instance['title'] = strip_tags($new_instance['title']);
            $instance[ 'facebook' ]      = (!empty($new_instance[ 'facebook' ])) ? strip_tags($new_instance[ 'facebook' ]) : '';
            $instance[ 'twitter' ]      = (!empty($new_instance[ 'twitter' ])) ? strip_tags($new_instance[ 'twitter' ]) : '';
            $instance[ 'google' ]      = (!empty($new_instance[ 'google' ])) ? strip_tags($new_instance[ 'google' ]) : '';
            $instance[ 'pinterest' ]      = (!empty($new_instance[ 'pinterest' ])) ? strip_tags($new_instance[ 'pinterest' ]) : '';
            $instance[ 'dribbble' ]      = (!empty($new_instance[ 'dribbble' ])) ? strip_tags($new_instance[ 'dribbble' ]) : '';
            $instance[ 'behance' ]      = (!empty($new_instance[ 'behance' ])) ? strip_tags($new_instance[ 'behance' ]) : '';
            $instance[ 'youtube' ]      = (!empty($new_instance[ 'youtube' ])) ? strip_tags($new_instance[ 'youtube' ]) : '';

            return $instance;
        }

        public function widget($args, $instance)
        {
            $title = apply_filters('widget_title', empty($instance['title']) ? __('Social Ions', 'shaped_theme') : $instance['title'], $instance, $this->id_base);

            echo $args[ 'before_widget' ];
            if (!empty($title))
                echo $args[ 'before_title' ] . $title . $args[ 'after_title' ];
            ?>

            <div class="social-link">
                <ul class="list-inline">
                    <?php $facebook_link = $instance['facebook'];
                        if ($facebook_link) { ?>
                           <li><a href="<?php echo esc_url($facebook_link) ?>" class="facebook"><i class="fa fa-facebook"></i></a></li> 
                    <?php } ?>

                    <?php $twitter_link = $instance['twitter'];
                        if ($twitter_link) { ?>
                           <li><a href="<?php echo esc_url($twitter_link) ?>" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <?php } ?>

                    <?php $google_link = $instance['google'];
                        if ($google_link) { ?>
                           <li><a href="<?php echo esc_url($google_link) ?>" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                    <?php } ?>

                    <?php $pinterest_link = $instance['pinterest'];
                        if ($pinterest_link) { ?>
                            <li><a href="<?php echo esc_url($pinterest_link) ?>" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                    <?php } ?>

                    <?php $dribbble_link = $instance['dribbble'];
                        if ($dribbble_link) { ?>
                            <li><a href="<?php echo esc_url($dribbble_link) ?>" class="dribbble"><i class="fa fa-dribbble"></i></a></li>
                    <?php } ?>

                    <?php $behance_link = $instance['behance'];
                        if ($behance_link) { ?>
                            <li><a href="<?php echo esc_url($behance_link) ?>" class="behance"><i class="fa fa-behance"></i></a></li>
                    <?php } ?>

                    <?php $youtube_link = $instance['youtube'];
                        if ($youtube_link) { ?>
                            <li><a href="<?php echo esc_url($youtube_link) ?>" class="youtube"><i class="fa fa-youtube"></i></a></li>
                    <?php } ?>
 
                </ul>                  
            </div>   


            <?php
            echo $args[ 'after_widget' ];
        }
    }


    // register widgets
    if (!function_exists('st_social_icon_register')) {
        function st_social_icon_register()
        {
            register_widget('ST_social_Widget');
        }

       add_action('widgets_init', 'st_social_icon_register');
    }

