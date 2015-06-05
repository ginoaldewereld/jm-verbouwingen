<?php
  //import the default gravityform contact forms
define("GF_THEME_IMPORT_FILE", "includes/gravityforms-contactform.json");

// Register the sitemap menu
add_action( 'init', 'register_menu_sitemap' );

function register_menu_sitemap(){
	register_nav_menus( array(
		'sitemap' => 'Sitemap'
    ));
}

$initialized = get_option('slate_initialized');
if($initialized == null){
	$initialized = false;
}

if(is_admin() && !$initialized){
	  include_once('includes/initialize_pages.php');
	
	  $siteIniter = new SiteInitializer(
		  "jmverbouwingen", 
		  "Lotterstraat 14 2021 TG Haarlem", 
		  "0625393245", 
		  "Info@jm-verbouwingen.nl");
	  $siteIniter->initializeAll();
	  add_option('slate_initialized', true);
}


include_once('includes/antispam.php');

?>
