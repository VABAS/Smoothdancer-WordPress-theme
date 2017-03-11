<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="main">
<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<a href="?p=<?php the_ID(); ?>"><h1 id="otsikkosivu<?php the_ID(); ?>"><?php the_title(); ?></h1></a>
<class class="authordate">Kirjoittanut <?php the_author(); ?> <?php the_date(); ?> <?php edit_post_link(); ?></class>
<div class="artikkeli"><?php the_content(__('(more...)')); ?></div>
<hr> <?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
<class class="alignleft"><?php previous_posts_link() ?></class>
<class class="alignright"><?php next_posts_link() ?></class>
</div>
</div>
<?php comments_template(); ?>
<div id="delimiter">
</div>
<?php get_footer(); ?>