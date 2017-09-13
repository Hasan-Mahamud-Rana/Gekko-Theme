<form action="<?php echo esc_url( home_url( '/' ) ); ?>" id="searchform" method="get">
	<input type="text" id="s" name="s" value="<?php _e('Hvad vil du finde?', 'minti') ?>" onfocus="if(this.value=='<?php _e('Hvad vil du finde?', 'minti') ?>')this.value='';" onblur="if(this.value=='')this.value='<?php _e('Hvad vil du finde?', 'minti') ?>';" autocomplete="off" />
	<input type="submit" value="<?php _e('Search', 'minti') ?>" id="searchsubmit" />
</form>