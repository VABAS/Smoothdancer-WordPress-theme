<?php
global $user_ID;
get_currentuserinfo();
if($user_ID==4){
 $stylesheet="style";
}
else $stylesheet="style";
?>
<!doctype html>
<html lang="fi">
<head>
<title><?php bloginfo('name'); ?></title>
<meta charset="UTF-8"/>
<link rel="shortcut icon" href="http://www.smoothdancer.fi/favicon.png?v=5" />
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()."/".$stylesheet; ?>.css">
<!-- <?php echo get_stylesheet_directory_uri(); ?> -->
<?php /*
<link rel='stylesheet' id='afg_swipebox_css-css'  href='http://www.smoothdancer.fi/wp-content/plugins/awesome-flickr-gallery-plugin/swipebox/css/swipebox.min.css?ver=4.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='afg_css-css'  href='http://www.smoothdancer.fi/wp-content/plugins/awesome-flickr-gallery-plugin/afg.css?ver=4.2.2' type='text/css' media='all' />
<script type='text/javascript' src='http://www.smoothdancer.fi/wp-includes/js/jquery/jquery.js?ver=1.11.2'></script>
<script type='text/javascript' src='http://www.smoothdancer.fi/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
<script type='text/javascript' src='http://www.smoothdancer.fi/wp-content/plugins/awesome-flickr-gallery-plugin/swipebox/js/jquery.swipebox.min.js?ver=4.2.2'></script>
<script type='text/javascript' src='http://www.smoothdancer.fi/wp-content/plugins/awesome-flickr-gallery-plugin/swipebox/myswipebox.js?ver=4.2.2'></script>
*/?>
<?php wp_head(); ?>

<style>
#header{
 background-image:url("<?php header_image(); ?>");
 background-size:cover;
 height:200px;
 line-height:200px;
 text-align:left;
}
#header h1{
 font-family:sans;
 color:#fff;
 margin-left:150px;
}
#header h1::first-letter{
 color:black;
 font-size:150%;
}
</style>
</head>
<body id="sivu<?php the_ID(); ?>">
<div id="wrapper">
<div id="header">
<!--<h1><?php echo get_bloginfo('name'); ?></h1>-->
</div>
