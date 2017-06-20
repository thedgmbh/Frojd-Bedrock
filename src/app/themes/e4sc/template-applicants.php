<?php
/**
 * Template Name: Applicants
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'applicants-page'); ?>
<?php endwhile; ?>
