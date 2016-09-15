<!-- search -->
<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
	<input class="search-input" type="search" name="s" placeholder="<?php _e( 'Buscar', 'html5blank' ); ?>">
	<button class="search-submit" type="submit" role="button">
		<img src="<?php echo get_template_directory_uri(); ?>-child/img/search.svg" alt="searching">
	</button>
</form>
<!-- /search -->
