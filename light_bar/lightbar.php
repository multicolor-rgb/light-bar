
<?php 

 $plugin_id = 'lightbar';
 
// Set up the folder name and its permissions
// Note the constant GSDATAOTHERPATH, which points to /path/to/getsimple/data/other/
$folder        = GSDATAOTHERPATH . '/' . $plugin_id . '/';
$lightbarbg  = $folder . 'lightbarbg.txt';
$avatarlightbar  = $folder . 'avatarlb.txt';

;?>

<style>

.user-user{
	background-image:url(<?php get_site_url();?>plugins/light_bar/img/avatar.png) !important;
	background-size:cover !improtant;
	background-position:center center !important; 
	border-radius:50%;overflow:hidden;
	width:60px !important;
	height:60px !important;
	padding:0;
}

.user-user{
	
		background-image:url(<?php echo file_get_contents($avatarlightbar );?>) !important;
		box-shadow:none !important;
}

#light-bar{
	
	background: <?php echo file_get_contents($lightbarbg );?> !important;
	
}

.light-button-bar{
	
	background: <?php echo file_get_contents($lightbarbg );?> !important;
	
}

</style>

<div id="light-bar" style=" ">
<div id="close-light-bar" class="close">
<i class="fas fa-times cl-btn"></i>
</div>

<div class="user-info">
<div class="user-id">
<div class="user-user" style="">


</div>

<div class="username" style="color:#fff">
<p> 

<?php

if (isset($_COOKIE['GS_ADMIN_USERNAME'])) {
	$cookie_user_id = _id($_COOKIE['GS_ADMIN_USERNAME']);
	if (file_exists(GSUSERSPATH . $cookie_user_id.'.xml')) {
		$datau = getXML(GSUSERSPATH  . $cookie_user_id.'.xml');
		$USR = stripslashes($datau->USR);
		$HTMLEDITOR = $datau->HTMLEDITOR;
		$TIMEZONE = $datau->TIMEZONE;
		$LANG = $datau->LANG;
	} else {
		$USR = null;
	}
} else {
	$USR = null;
}
 
 if(isset($USR1)) { echo $USR1; } else { echo $USR; };?>
 
 </p>
</div> 
</div>

</div>

<div class="menus-all">
  <ul class="menu-bar" style="margin-bottom:1rem;">

 <li><a href="<?php get_site_url();?>admin/edit.php?id=<?php get_page_slug();?>"> <i class="fas fa-edit fa-lg"></i><?php i18n('EDITPAGE_TITLE');?></a></li>
 <li><a href="<?php get_site_url();?>admin/edit.php"><i class="far fa-plus-square fa-lg"></i> <?php i18n('SIDE_CREATE_NEW'); ?></a></li>
 <?php get_component('light_bar_nav'); ?>
 
 

 </ul>
 
 <ul class="menu-bar">

 
 <li><a href="<?php get_site_url();?>admin/pages.php"> <i class="fas fa-desktop"></i> <?php i18n('TAB_PAGES');?> </a></li>
 <li><a href="<?php get_site_url();?>admin/upload.php"><i class="far fa-file"></i> <?php i18n('TAB_FILES');?></a></li>
  <li><a href="<?php get_site_url();?>admin/theme.php"><i class="fas fa-paint-brush"></i> <?php i18n('TAB_THEME');?></a></li>
  <li><a href="<?php get_site_url();?>admin/components.php"><i class="fas fa-align-justify"></i> <?php i18n('SIDE_COMPONENTS'); ?></a></li>
  <li><a href="<?php get_site_url();?>admin/backups.php"><i class="fas fa-save"></i> <?php i18n('TAB_BACKUPS');?></a></li>
  <li><a href="<?php get_site_url();?>admin/plugins.php"><i class="fas fa-plug"></i> <?php i18n('PLUGINS_NAV');?></a></li>

 </ul>
 
 
 </div>
 
 
 <div class="settings">
 
 <div> <a href="<?php get_site_url();?>admin/settings.php"> <i class="fas fa-cog fa-lg"></i> </a> </div>
 <div> <a href="<?php get_site_url();?>admin/support.php"> <i class="fas fa-life-ring fa-lg"></i> </a> </div>
 <div> <a href="<?php get_site_url();?>admin/logout.php"> <i class="fas fa-power-off fa-lg"></i> </a> </div>
 <div> <a href="<?php get_site_url();?>admin/load.php?id=light_bar"> <i class="fas fa-swatchbook fa-lg"></i> </a> </div>

 
 </div>
 
 </div>
 

 
 