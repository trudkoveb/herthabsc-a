<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

   <div id="news">
     <h2><?php the_title() ?></h2>
     <?php
     if ( function_exists( 'add_theme_support' ) )
      the_post_thumbnail( array(250,9999), array('class' => 'pic_for_news') );
    ?>
    <?php the_excerpt() ?>
    <?php the_content() ?>

    <div class="meta">
      <span>Тэги:</span>
      <?php
      $posttags = get_the_tags();
      if ($posttags) {
        foreach ($posttags as $tag) {
          $tag_links[] = '<a href="'  .get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
        }
        echo join( ', ', $tag_links );
      }
      ?>

    </div>

  </div>

  <h2>Комментарии</h2>
  <?php comments_template(); ?>

<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>

<?php get_footer(); ?>