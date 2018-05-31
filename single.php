<?php get_header(); ?>
<div class="content">
  <div class="main">
    <main>
      <?php the_post(); ?>
      <div>
        <h1><?php the_title(); ?></h1>
        <p>Postado por <?php the_author() ?> em <?php the_time('d/M/Y') ?></p>
        <p><?php the_content(); ?></p>
      </div>
    </main>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
