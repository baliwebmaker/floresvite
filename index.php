<?php get_header(); ?>
<!-- main content -->
<main class="flex-grow px-4 py-4">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   <?php the_content() ?>
   <?php endwhile; endif; ?>
</main>
<?php get_footer();