
    <?php if (get_theme_mod( 'st_home_layout' ) == 'full') {
        
    } else { ?>
        <div class="col-md-4">
            <div class="primary-sidebar widget-area" role="complementary">
                <?php dynamic_sidebar('st-blog-sidebar'); ?>
            </div>
        </div>
    <?php }
     ?>