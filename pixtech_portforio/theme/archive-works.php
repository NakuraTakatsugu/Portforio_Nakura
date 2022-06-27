<?php
/*
Template Name: archive-works
*/
?>
<?php get_header(); ?>
<div class="page-archive-works">
  <main class="main">
    <div class="inner">
      <div class="headline-wrap">
        <h3 class="headline moderate js-fadeUpTrigger">
          WORKS
          <span class="subhead dark">制作実績</span>
        </h3>
      </div>
      <?php $the_query = customPostLoop( 'works',  '6', 'date', 'desc' , max( 1, get_query_var('paged') ) );?>
      <?php if( $the_query -> have_posts() ) : ?>
      <div class="contents-wrap js-fadeUpTrigger">
        <div class="thumbnail-wrap">
        <?php  while( $the_query -> have_posts() ) : $the_query -> the_post() ;?>
          <div class="thumbnail hover-zoom">
            <a href="<?php the_permalink(); ?>">
              <?php  echo_thumbnail();?>
              <p class="overlay-text"><?php trim_title_strings(30);?></p>
            </a>
          </div>
        <?php endwhile; ?>
        <?php else: ?>
          <p>記事が見つかりません。</p>
        <?php endif; ?>
        </div>
      </div>
      <?php wp_reset_postdata(); ?>
      <?php pagination( $the_query->max_num_pages );?>
    </div>
  </main>
</div>
<?php get_footer(); ?>
