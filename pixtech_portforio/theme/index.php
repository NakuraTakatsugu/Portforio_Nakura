<?php get_header(); ?>
<div class="page-index">
  <main class="main">
    <div class="first-view">
      <div class="overlay"></div>
      <div class="hero-message js-fadeUpTrigger">
        <h2>
          welcome<br />
          to<br class="pc-break" />
          MY <br class="sp-break" />Portfolio
        </h2>
      </div>
    </div>
    <section class="section about-this-site">
      <div class="inner">
        <div class="headline-wrap js-fadeUpTrigger">
          <h3 class="headline light">
            ABOUT <br class="sp-break" />THIS SITE
            <span class="subhead dark"> このサイトについて </span>
          </h3>
        </div>
        <div class="contents-wrap js-fadeUpTrigger">
          <p class="text">
            テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
          </p>
        </div>
      </div>
    </section>
    <section id="about" class="section about-me">
      <div class="inner">
        <div class="headline-wrap js-fadeUpTrigger">
          <h3 class="headline moderate">
            ABOUT ME<span class="subhead dark">プロフィール</span>
          </h3>
        </div>
        <div class="contents-wrap js-fadeUpTrigger">
          <div class="introduce">
            <div class="name-wrap">
              <p class="name">名倉 喬嗣<span class="small-letter">Nakura Takatsugu</span></p>
            </div>
            <p class="detail">
              テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
            </p>
          </div>
          <div class="avatar">
            <img
              src="<?php echo esc_url( get_theme_file_uri() . '/assets/img/Avatar-image.png' );?>"
              alt=""
              width="100%"
              height="auto"
            />
          </div>
        </div>
      </div>
    </section>
    <section id="skills" class="section skills">
      <div class="inner">
        <div class="headline-wrap js-fadeUpTrigger">
          <h3 class="headline moderate">SKILLS<span class="subhead dark">スキル</span></h3>
        </div>
        <div class="contents-wrap js-fadeUpTrigger">
          <ul class="skill-icons">
            <li class="icon">
              <img src="<?php echo esc_url( get_theme_file_uri() . '/assets/img/html_icon.svg' );?>" alt="html5" />
            </li>
            <li class="icon">
              <img src="<?php echo esc_url( get_theme_file_uri() . '/assets/img/css_icon.svg' );?>" alt="css3" />
            </li>
            <li class="icon">
              <img src="<?php echo esc_url( get_theme_file_uri() . '/assets/img/jquery_icon.svg' );?>" alt="jQuery" />
            </li>
            <li class="icon">
              <img src="<?php echo esc_url( get_theme_file_uri() . '/assets/img/github_icon.svg' );?>" alt="github" />
            </li>
            <li class="icon">
              <img src="<?php echo esc_url( get_theme_file_uri() . '/assets/img/git_icon.svg' );?>" alt="git" />
            </li>
            <li class="icon">
              <img src="<?php echo esc_url( get_theme_file_uri() . '/assets/img/wordpress_icon.svg' );?>" alt="wordpress" />
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="section works">
      <div class="inner">
        <div class="headline-wrap js-fadeUpTrigger">
          <h3 class="headline moderate">WORKS<span class="subhead dark">制作実績</span></h3>
        </div>
        <?php $the_query = customPostLoop( 'works',  '4', 'date', 'desc' , 1 );?>
        <?php if( $the_query -> have_posts() ) :?>
        <div class="contents-wrap js-fadeUpTrigger">
          <div class="swiper mySwiper-slider">
            <div class="swiper-wrapper">
              <?php while( $the_query -> have_posts() ) : $the_query -> the_post() ; ?>
              <div class="swiper-slide thumbnail hover-zoom">
                <a href="<?php the_permalink(); ?>">
                  <?php  echo_thumbnail();?>
                  <p class="overlay-text">制作実績</p>
                </a>
              </div>
              <?php endwhile; ?>
              <?php endif; ?>
            </div>
            <div class="swiper-button-prev">
              <img src="<?php echo esc_url( get_theme_file_uri() . '/assets/img/Arrow-icon-square.svg' );?>" alt="" />
            </div>
            <div class="swiper-button-next">
              <img src="<?php echo esc_url( get_theme_file_uri() . '/assets/img/Arrow-icon-square.svg' );?>" alt="" />
            </div>
          </div>
          <?php if( $the_query -> have_posts() ) :?>
          <div class="swiper mySwiper-gallery">
            <div class="swiper-wrapper">
              <?php while( $the_query -> have_posts() ) : $the_query -> the_post() ; ?>
              <div class="swiper-slide thumbnail">
                <?php  echo_thumbnail();?>
              </div>
              <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
          <div class="button-wrap">
            <button
            onclick="location.href='<?php echo esc_url(home_url('/archive-works')) ; ?>'"
            class="button dark">
              実績一覧はこちら
            </button>
          </div>
        </div>
      </div>
    </section>
    <section class="section contact">
      <div class="inner js-fadeUpTrigger">
        <div class="headline-wrap">
          <h3 class="headline light">
            CONTACT<span class="subhead light">お問い合わせ</span>
          </h3>
        </div>
        <div class="contents-wrap">
          <p class="text">
            ご依頼、ご質問等、<br class="sp-break" />お気軽にお問い合わせください。
          </p>
          <div class="button-wrap">
            <button onclick="location.href='<?php echo esc_url(home_url('/contact-form')) ; ?>'" class="button light">
              お問い合わせはこちら
            </button>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>
<?php get_footer(); ?>
