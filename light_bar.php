<?php

# get correct id for plugin
$thisfile=basename(__FILE__, ".php");
 
# register plugin
register_plugin(
	$thisfile, //Plugin id
	'Light bar', 	//Plugin name
	'1.3', 		//Plugin version
	'Mateusz Skrzypczak',  //Plugin author
	'http://www.multicolor.stargard.pl', //author website
	'Add shortcut menu to your frontend now with config', //Plugin description
	'plugins', //page type - on which admin tab to display
	'light_bar'  //main function (administration)
);
 
 


 if (isset($_COOKIE['GS_ADMIN_USERNAME'])) {
	$cookie_user_id = _id($_COOKIE['GS_ADMIN_USERNAME']);
	if (file_exists(GSUSERSPATH . $cookie_user_id.'.xml')) {
		$datau = getXML(GSUSERSPATH  . $cookie_user_id.'.xml');
		$USR = stripslashes($datau->USR);
		$HTMLEDITOR = $datau->HTMLEDITOR;
		$TIMEZONE = $datau->TIMEZONE;
		$LANG = $datau->LANG;
		
		
	

register_script('light_bar_script', $SITEURL.'plugins/light_bar/js/script_light_bar.js', '1.0', TRUE);

queue_script('light_bar_script',GSFRONT);  


register_style('light_bar_style', $SITEURL.'/plugins/light_bar/css/style_light_bar.css', GSVERSION, 'screen');
queue_style('light_bar_style',GSFRONT);  





 

add_action('theme-header','font_awesome');


add_action('header','light_none');
add_action('plugins-sidebar','createSideMenu',array($thisfile,'Light bar config'));

# functions

function font_awesome(){
	
	echo '<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">';
include('light_bar/lightbar.php' );

};


}

	} else {
		$USR = null;
	}


	



	







		

# activate filter 
 




function light_bar(){
		 $plugin_id = 'lightbar';
 
// Set up the folder name and its permissions
// Note the constant GSDATAOTHERPATH, which points to /path/to/getsimple/data/other/




 $plugin_id = 'lightbar';
 
// Set up the folder name and its permissions
// Note the constant GSDATAOTHERPATH, which points to /path/to/getsimple/data/other/
$folder        = GSDATAOTHERPATH . '/' . $plugin_id . '/';
$lightbarbg  = $folder . 'lightbarbg.txt';
$avatarlightbar  = $folder . 'avatarlb.txt';

$chmod_mode    = 0755;
$folder_exists = file_exists($folder) || mkdir($folder, $chmod_mode);
echo'
 <form  action="#" style="margin:0 auto;" method="POST">
<p><b>lightbar background color</b></p>
 <input type="color" style="" value="';echo file_get_contents($lightbarbg ) ;echo '"  name="bodycolorlb" /> <br>  default :19, 34, 56 <br><br>
  
  <p><b>Avatar url 60x60px </b></p>
<input type="text" style="width:90%;padding:10px;border-radius:5px;" value="';echo file_get_contents($avatarlightbar ) ;echo '"  name="avatarlb" />
<br> 

';
	echo'
	<br>
<input type="submit" name="submit" style="background:#000;color:#fff;padding:10px;margin-top:10px;border:solid 0 ;border-radius:10px;" value="Save settings" />
 <br><br>
  </form>
 ';
 
	
	echo' this plugin add light_bar to your frontend when your logged.<br> I use <a href="https://fonts.google.com/specimen/Poppins">Poppins</a> and <a href="http://fontawesome.com/">Font Awesome 5</a>';
	echo'<br><br><p>thanks <b>islander</b> for sugesstion create better code:)</p>';
	

	
	 	    
  if(isset($_POST['submit'])){
$avatarlb = $_POST['avatarlb'];
$bodycolorlb = $_POST['bodycolorlb'];

  file_put_contents($lightbarbg , $bodycolorlb);
  file_put_contents($avatarlightbar , $avatarlb);
  echo "<meta http-equiv='refresh' content='0'>";
 echo '<div style=" position:fixed;top:0;left:0; width:100%;background:green;color:#fff;border-radius:5px;padding:10px;text-align:center;">ok ! ';

  echo' choose a different page to see the changes';
  echo'</div>';
};
}


function light_none(){
echo '<style>
#light-bar{
display:none !important;
opacity:0 !important;
	}

</style>';

}

;


?>



