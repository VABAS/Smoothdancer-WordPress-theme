<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="main">
<div id="content">
<!--<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1 id="otsikkosivu<?php the_ID(); ?>"><?php the_title(); ?></h1>
<div class="artikkeli"><?php the_content(__('(more...)')); ?></div>
<hr> <?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</div>
</div>
<?php comments_template(); ?>-->
Nothing here...
<div id="delimiter">
</div>
<?php get_footer(); ?>