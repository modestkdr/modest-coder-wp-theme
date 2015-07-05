<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes();?>>
<head profile="http://gmpg.org/xfn/11">
<title><?php wp_title(' ');?><?php if (wp_title(' ', false)) {?> at <?php }
?><?php bloginfo('name');?></title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset');?>" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link href='http://fonts.googleapis.com/css?family=Goudy+Bookletter+1911' rel='stylesheet' type='text/css'>
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name');?> RSS Feed" href="<?php bloginfo('rss2_url');?>" />
<link rel="shortcut icon" type="image/x-png" href="<?php bloginfo('template_url');?>/favicon.png" />
<link rel="pingback" href="<?php bloginfo('pingback_url');?>" />
<?php wp_head();?>
</head>

<body>
<div id="outer-header">
	<div id="header" class="container">
		<div class="col-md-1"></div>
		<div class="col-md-4 brand">
			<div class="col-md-3">
				<img id="logo" src="http://www.srikanth.me/wp-content/uploads/2012/06/srikanth-ad.png" />
			</div>
			<div class="col-md-9">
				<h1><a href="<?php echo get_home_url();?>">Srikanth AD</a></h1>
				<h3>Web Developer</h3>
			</div>
		</div>
		<div class="col-md-6">
			<?php wp_nav_menu(array('theme_location' => 'header-menu',
	'container_class' => 'header-menu-container',
	'menu_class' => 'list-inline header-menu'));?>
		</div>

	</div>
</div>
<div class="container">

