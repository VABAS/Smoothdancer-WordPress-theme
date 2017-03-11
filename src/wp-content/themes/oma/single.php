<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="main">
<div id="content">
<class class="alignleft" style="text-align:center;"><?php previous_post_link()?></class>
<class class="alignright" style="text-align:center;"><?php next_post_link()?></class>
<div class="artikkeli">
<?php while ( have_posts() ) : the_post(); ?>
<h1 id="otsikkosivu<?php the_ID(); ?>"><?php the_title(); ?></h1>
<class class="authordate">Kirjoittanut <?php the_author(); ?> <?php the_date(); ?> <?php edit_post_link(); ?></class>
<?php get_template_part( 'content', get_post_format() ); ?>
<?php the_content() ?>
<?php endwhile; ?>
</div>
<hr/>
</div>
</div>
<div id="comments">
<?php comments_template(); ?>
</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>