			</div><!-- content_wrapper -->

        </div><!-- main -->

    </div><!-- container -->

    <script>
    	var templateDir = "<?php bloginfo('template_directory') ?>";
	</script>

	<script src="<?php echo get_template_directory_uri(); ?>/app/components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/app/components/foundation/js/foundation.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>

    <?php wp_footer(); ?>

	<?php global $NHP_Options; ?>
	<?php $NHP_Options->show('adsense-analytics');?>
    </body>
</html>