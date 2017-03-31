<?php
   /*
   Plugin Name: Snow Falll Plugin
   Plugin URI: http://dixeam.com
   Description: This plugin created for winter snow fall that look beautifull for your website.
   Version: 1.2
   Author: Dixeam Developer- Qaiser
   Author URI: http://dixeam.com
   License: GPL2
   */
if ( ! is_admin() ) {
add_action('wp_head','snow_fall');

function snow_fall() {

	


?>
<script type="text/javascript" src="<?php echo plugin_dir_url(__FILE__).'snowstorm-min.js'; ?>"></script>
<script type="text/javascript">
snowStorm.snowColor = '#FFF'; // blue-ish snow!?
snowStorm.flakesMaxActive = 96;  // show more snow on screen at once
snowStorm.useTwinkleEffect = true; // let the snow flicker in and out of view
</script>
<?php } } ?>
