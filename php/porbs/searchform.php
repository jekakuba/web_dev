<div class="search-bar">
	<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="search-bar-form">
		<input type="submit" value="<?php echo get_search_query();?>" class="search-button">
		<input type="text" class="search-input" name="q" size="21" maxlength="120" value="<?php echo esc_attr_x( '', 'submit button' ); ?>">
	</form>
</div>