<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="main">
<div id="content">
<h1>404 - Sivua ei löytynyt</h1>
Hakemaasi sivua ei löytynyt. Tarkista osoitteen oikeinkirjoitus ja yritä uudelleen.
<p>
Mikäli seurasit linkkiä, voit ilmoittaa sen rikkinäiseksi sähköpostitse osoitteessa webmaster(at)smoothdancer.fi ja liitä viestiin tämän sivun osoite sekä edellisen sivun osoite<?php if (isset($_SERVER['HTTP_REFERER'])){echo "(".$_SERVER['HTTP_REFERER'].")";} ?>.
</p>
<hr/>
</div>
</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>