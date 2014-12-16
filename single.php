<?php if (get_post_format() == 'aside'): ?>
	<?php get_template_part( 'format', 'aside' ) ?>
<?php else: ?>
	<?php get_template_part( 'format', 'single' ) ?>
<?php endif ?>
	