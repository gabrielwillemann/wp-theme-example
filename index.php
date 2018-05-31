<?php get_header(); ?>
<div class="content">
  <div class="wrap">
    <div class="main">
      <main>
        <?php if (have_posts()) : ?>
          <?php while ( have_posts() ) : ?>
            <?php the_post(); ?>
            <div>
              <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
              <p>Postado por <?php the_author() ?> em <?php the_time('d/M/Y') ?></p>
            </div>
          <?php endwhile?>
        <?php endif; ?>
      </main>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer();
