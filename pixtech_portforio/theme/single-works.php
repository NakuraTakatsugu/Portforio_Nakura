<?php get_header(); ?>
<div class="page-work">
<main class="main">
  <div class="inner">
    <div class="headline-wrap js-fadeUpTrigger">
      <h3 class="headline moderate">
        WORKS
        <span class="subhead dark">制作実績</span>
      </h3>
    </div>
    <div class="contents-wrap js-fadeUpTrigger">
      <div class="thumbnail">
        <?php echo_thumbnail(); ?>
      </div>
      <div class="detail-wrap">
        <div class="detail">
          <div class="head">サイト名</div>
          <div class="body">
            <?php echoFieldBody('title'); ?>
          </div>
        </div>
        <div class="detail">
          <div class="head">制作期間</div>
          <div class="body">
            <?php echoFieldBody('duration'); ?>
          </div>
        </div>
        <div class="detail">
          <div class="head">制作内容</div>
          <div class="body">
            <?php echoFieldBody('details'); ?>
          </div>
        </div>
        <div class="detail">
          <div class="head">スキル</div>
          <div class="body">
            <?php
              $content_string = get_the_content("", true);
              $content_string = str_replace('wp-block-gallery','skill-icons',$content_string);
              $content_string = str_replace('wp-block-image','icon',$content_string);
              echo $content_string;
            ?>
          </div>
        </div>
      </div>
      <div class="button-wrap">
        <button onclick="location.href='<?php echo esc_url(home_url('/archive-works')) ; ?>'" class="button dark">
          実績一覧はこちら
        </button>
      </div>
    </div>
  </div>
</main>
</div>
<?php get_footer(); ?>
