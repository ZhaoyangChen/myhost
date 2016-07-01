<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!-- favicon -->
    <?php if (get_theme_mod('st_favicon')): ?>
    	<link rel="shortcut icon" type="image/png" href="<?php echo esc_url(get_theme_mod('st_favicon')); ?>">
	<?php endif; ?>
    <!-- end favicon -->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if(!get_theme_mod('st_preloader') ): ?>
    <div id="st-preloader">
        <div id="pre-status">
            <div class="preload-placeholder"></div>
        </div>
    </div>
<?php endif; ?>
<!-- /Preloader -->

<header id="header">
	<div class="container">
		<div class="main-logo pull-left"><a href="<?php echo esc_url(site_url()); ?>"><img src="<?php echo esc_url(get_theme_mod('st_logo')); ?>" alt=""></a></div>
		<div id="navigation-wrapper" class="pull-right">
			<?php wp_nav_menu( array('container' => false, 'theme_location' => 'main-menu', 'menu_class' => 'menu')); ?>
		</div>
		<div class="menu-mobile"></div>
	</div>
</header>



