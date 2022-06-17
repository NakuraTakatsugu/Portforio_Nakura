<?php
  define("DIRE", get_theme_file_uri());

  function my_setup(){
    add_theme_support('post-thumbnails');
  }
  add_action('after_setup_theme', 'my_setup');

  function create_menu_area() {
    register_nav_menu( 'header', 'ヘッダーメニュー' );
  }
  add_action( 'after_setup_theme', 'create_menu_area' );

  function add_files(){
    wp_enqueue_style('reset_style',DIRE.'/assets/css/reset.css');
    wp_enqueue_style('my_swiper_style','//unpkg.com/swiper@8/swiper-bundle.min.css');
    wp_enqueue_style('my_style',DIRE.'/assets/css/style.css');
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery-js', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
    wp_enqueue_script('swiper-js', '//unpkg.com/swiper@8/swiper-bundle.min.js');
    wp_enqueue_script('my_script',DIRE.'/assets/js/index.js');
  }
  add_action('wp_enqueue_scripts','add_files');

  function add_file_types_to_uploads($file_types){

    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );

    return $file_types;
  }
  add_action('upload_mimes', 'add_file_types_to_uploads');

  function set_menu($location , $menuClass = 'nav-list'){
    $menu = array(
      'theme_location'  => $location,
      'container' => 'nav',
      'container_class' => 'nav',
      'menu_class' => $menuClass,
    );
    wp_nav_menu( $menu );
  }

  function customPostLoop($postType , $postsPerPage , $orderby , $order , $paged ){
    $the_query = new WP_Query( array(
      'post_type' => $postType,
      'posts_per_page' => $postsPerPage,
      'orderby' => $orderby,
      'order' => $order,
      'paged'=> $paged,
      )
    );
    return $the_query;
  }

  function echo_thumbnail(){
    if ( has_post_thumbnail() ):
      the_post_thumbnail("");
    else:
      $no_image_link = esc_url( get_template_directory_uri() );
      $html = "<img src='{$no_image_link}/assets/img/no-image.jpeg'";
      echo $html;
    endif;
  }

  function sub_loop($postType , $postsPerPage , $orderby , $order , $paged ) {
    $the_query = new WP_Query( array(
      'post_type' => $postType,
      'posts_per_page' => $postsPerPage,
      'orderby' => $orderby,
      'order' => $order,
      'paged'=> $paged,
      )
    );
    return $the_query;
  }

  function pagination_numbers ( $total_pages , $total_paged , $page_number ) {
    $range = 2;
    $html = "";
    if ( $page_number <= $total_paged + $range && $page_number >= $total_paged - $range ):
      if ( $total_paged === $page_number ):
        $link = '#';
        $html .= "<li class='pagination number is-active'><a href='{$link}'>{$page_number}</a></li>";
      else :
        $link = get_pagenum_link($page_number);
        $html .= "<li class ='pagination number'><a href='{$link}'>{$page_number}</a></li>";
      endif;
      return $html;
    endif;
  }

  function pagination( $pages ) {
    $pages = ( int ) $pages;
    global $paged;
    $paged = $paged?: 1;
    if ( 1 !== $pages ):
      $html = "<ul class ='pagination-wrap'>";
        if ( $paged > 1 ) {
          $link = get_pagenum_link( $paged - 1 );
          $image_link = get_theme_file_uri() . '/assets/img/Arrow-vector.svg';
          $image_arrow = "<img src='{$image_link}' alt='前のページへ' />";
          $html .= "<li class='pagination preview-button'><a href='{$link}'>{$image_arrow}</a></li>";
        }
        for ( $i = 1; $i <= $pages; $i++ ) {
          $html .= pagination_numbers( $pages , $paged ,$i);
        }
        if ( $paged < $pages ) {
          $link = get_pagenum_link( $paged + 1 );
          $image_link = get_theme_file_uri() . '/assets/img/Arrow-vector.svg';
          $image_arrow = "<img src='{$image_link}' alt='次のページへ' />";
          $html .= "<li class='pagination next-button'><a href='{$link}'>{$image_arrow}</a></li>";
        }
      $html .= '</ul>';
      echo $html;
    endif;
  }

  function echoFieldBody($fieldName){
    $html = get_field($fieldName);
    if($html):
      echo $html;
    endif;
  }

  function trim_title_strings( $trim_limit ){
    global $post;
    if( mb_strlen( $post->post_title, 'UTF-8' ) > $trim_limit ){
      $title = mb_substr( $post->post_title, 0, $trim_limit, 'UTF-8' );
      echo $title.'…';
    }else{
      echo $post->post_title;
    }
  }
?>
