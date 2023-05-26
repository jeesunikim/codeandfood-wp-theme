/*
Template Name: Grid Blog Post Template
Template Post Type: post
*/

<?php while (have_posts()) : the_post(); ?>
  <!-- HTML structure for each blog post -->
  <div class="grid-item">
    <h2><?php the_title(); ?></h2>
    <div class="post-content">
      <?php the_content(); ?>
    </div>
  </div>
<?php endwhile; ?>