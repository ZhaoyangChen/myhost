
<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="footer-top"><?php dynamic_sidebar('footer-widget'); ?></div>
		</div>
	</div>

	<div class="copy-right-text text-center">
		<?php if(get_theme_mod('st_footer_copyright')): ?>
			<p><?php echo get_theme_mod('st_footer_copyright'); ?></p>
		<?php endif; ?>
	</div><!-- /Copyright Text -->
</footer><!-- /#Footer -->

<?php if (!get_theme_mod('st_back_to_top')): ?>
    <div class="scroll-up">
        <a href="#"><i class="fa fa-angle-up"></i></a>
    </div>
<?php endif; ?>
<!-- Scroll Up -->

<?php wp_footer(); ?>

</body>
</html>
