<div id="sidebar">
<?php 
wp_nav_menu(array( 'theme_location' => 'yla-valikko', 'container' => 'false','link_before' => '<span class="menulinkki">', 'link_after' => '</span>',));
//wp_nav_menu();
$lista=array(
	"<a href=\"http://smoothdancer.fi/packet.php\"><!-- mainframe-welcome --></a>",
	"<a href=\"http://smoothdancer.fi/packet.php\" style=\"display: none;\">mainframe-welcome</a>",
	"<div style=\"display: none;\"><a href=\"http://smoothdancer.fi/packet.php\">mainframe-welcome</a></div>",
	"<a href=\"http://smoothdancer.fi/packet.php\"></a>",
	"<!-- <a href=\"http://smoothdancer.fi/packet.php\">mainframe-welcome</a> -->",
	"<div style=\"position: absolute; top: -250px; left: -250px;\"><a href=\"http://smoothdancer.fi/packet.php\">mainframe-welcome</a></div>",
	"<a href=\"http://smoothdancer.fi/packet.php\"><span style=\"display: none;\">mainframe-welcome</span></a>",
	"<a href=\"http://smoothdancer.fi/packet.php\"><div style=\"height: 0px; width: 0px;\"></div></a>"
);
$maara=count($lista);
$randomi=rand(0, $maara-1);
echo "\n".$lista[$randomi]."\n";
?>
</div>
