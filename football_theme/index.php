<?php get_header(); ?>


<div id="last_match">
 <h4>Последний матч:</h4>
 <p>Ганновер-96 – Герта 1:3<br>
   6 ноября 2015, 22:30<br>
   Стадион АВД-Арена<br>
   Голы:  Голы:  Кийотаке, 70'(пен.) - Калу 33',60',87'</p>
 </div>
 <div id="next_match">
   <h4>Следующий матч:</h4>
   <p class="result">Герта – Хоффенхайм-1899</p>
   <p>22 ноября 2015, 17:30</p>
   <p>Стадион Олимпияштадион</p>
 </div>

 <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

   <div id="news">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
    <?php
    if ( function_exists( 'add_theme_support' ) )
      the_post_thumbnail( array(250,9999), array('class' => 'pic_for_news') );
    ?>
    <?php the_excerpt() ?>
  </div>

<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>



<?php get_footer(); ?>