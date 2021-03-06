<?php
/*
Author: Eddie Machado
URL: http://themble.com/bones/

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images,
sidebars, comments, etc.
*/

// LOAD BONES CORE (if you remove this, the theme will break)
require_once( 'library/bones.php' );

// CUSTOMIZE THE WORDPRESS ADMIN (off by default)
// require_once( 'library/admin.php' );

/*********************
LAUNCH BONES
Let's get everything up and running.
*********************/

function bones_ahoy() {

  //Allow editor style.
  //add_editor_style( get_stylesheet_directory_uri() . '/library/css/editor-style.css' );

  // let's get language support going, if you need it
  load_theme_textdomain( 'bonestheme', get_template_directory() . '/library/translation' );

  // USE THIS TEMPLATE TO CREATE CUSTOM POST TYPES EASILY
  require_once( 'library/custom-post-type.php' );

  // launching operation cleanup
  add_action( 'init', 'bones_head_cleanup' );
  // A better title
  add_filter( 'wp_title', 'rw_title', 10, 3 );
  // remove WP version from RSS
  add_filter( 'the_generator', 'bones_rss_version' );
  // remove pesky injected css for recent comments widget
  add_filter( 'wp_head', 'bones_remove_wp_widget_recent_comments_style', 1 );
  // clean up comment styles in the head
  add_action( 'wp_head', 'bones_remove_recent_comments_style', 1 );
  // clean up gallery output in wp
  add_filter( 'gallery_style', 'bones_gallery_style' );

  // enqueue base scripts and styles
  add_action( 'wp_enqueue_scripts', 'bones_scripts_and_styles', 999 );
  // ie conditional wrapper

  // launching this stuff after theme setup
  bones_theme_support();

  // adding sidebars to Wordpress (these are created in functions.php)
  add_action( 'widgets_init', 'bones_register_sidebars' );

  // cleaning up random code around images
  add_filter( 'the_content', 'bones_filter_ptags_on_images' );
  // cleaning up excerpt
  add_filter( 'excerpt_more', 'bones_excerpt_more' );

} /* end bones ahoy */

// let's get this party started
add_action( 'after_setup_theme', 'bones_ahoy' );


/************* OEMBED SIZE OPTIONS *************/

if ( ! isset( $content_width ) ) {
	$content_width = 680;
}

/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
add_image_size( 'bones-thumb-600', 600, 150, true );
add_image_size( 'bones-thumb-300', 300, 100, true );

/*
to add more sizes, simply copy a line from above
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 100 sized image,
we would use the function:
<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
for the 600 x 150 image:
<?php the_post_thumbnail( 'bones-thumb-600' ); ?>

You can change the names and dimensions to whatever
you like. Enjoy!
*/

add_filter( 'image_size_names_choose', 'bones_custom_image_sizes' );

function bones_custom_image_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'bones-thumb-600' => __('600px by 150px'),
        'bones-thumb-300' => __('300px by 100px'),
    ) );
}

/*
The function above adds the ability to use the dropdown menu to select
the new images sizes you have just created from within the media manager
when you add media to your content blocks. If you add more image sizes,
duplicate one of the lines in the array and name it according to your
new image size.
*/

/************* THEME CUSTOMIZE *********************/

/* 
  A good tutorial for creating your own Sections, Controls and Settings:
  http://code.tutsplus.com/series/a-guide-to-the-wordpress-theme-customizer--wp-33722
  
  Good articles on modifying the default options:
  http://natko.com/changing-default-wordpress-theme-customization-api-sections/
  http://code.tutsplus.com/tutorials/digging-into-the-theme-customizer-components--wp-27162
  
  To do:
  - Create a js for the postmessage transport method
  - Create some sanitize functions to sanitize inputs
  - Create some boilerplate Sections, Controls and Settings
*/

function bones_theme_customizer($wp_customize) {
  // $wp_customize calls go here.
  //
  // Uncomment the below lines to remove the default customize sections 

  // $wp_customize->remove_section('title_tagline');
  // $wp_customize->remove_section('colors');
  // $wp_customize->remove_section('background_image');
  // $wp_customize->remove_section('static_front_page');
  // $wp_customize->remove_section('nav');

  // Uncomment the below lines to remove the default controls
  // $wp_customize->remove_control('blogdescription');
  
  // Uncomment the following to change the default section titles
  // $wp_customize->get_section('colors')->title = __( 'Theme Colors' );
  // $wp_customize->get_section('background_image')->title = __( 'Images' );
}

add_action( 'customize_register', 'bones_theme_customizer' );

/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function bones_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __( 'Sidebar 1', 'bonestheme' ),
		'description' => __( 'The first (primary) sidebar.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle test">',
		'after_title' => '</h4>',
	));

	/*
	to add more sidebars or widgetized areas, just copy
	and edit the above sidebar code. In order to call
	your new sidebar just use the following code:

	Just change the name to whatever your new
	sidebar's id is, for example:

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __( 'Sidebar 2', 'bonestheme' ),
		'description' => __( 'The second (secondary) sidebar.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	To call the sidebar in your template, you can just copy
	the sidebar.php file and rename it to your sidebar's name.
	So using the above example, it would be:
	sidebar-sidebar2.php

	*/
} // don't remove this bracket!


/************* COMMENT LAYOUT *********************/

// Comment Layout
function bones_comments( $comment, $args, $depth ) {
   $GLOBALS['comment'] = $comment; ?>
  <div id="comment-<?php comment_ID(); ?>" <?php comment_class('cf'); ?>>
    <article  class="cf">
      <header class="comment-author vcard">
        <?php
        /*
          this is the new responsive optimized comment image. It used the new HTML5 data-attribute to display comment gravatars on larger screens only. What this means is that on larger posts, mobile sites don't have a ton of requests for comment images. This makes load time incredibly fast! If you'd like to change it back, just replace it with the regular wordpress gravatar call:
          echo get_avatar($comment,$size='32',$default='<path_to_url>' );
        */
        ?>
        <?php // custom gravatar call ?>
        <?php
          // create variable
          $bgauthemail = get_comment_author_email();
        ?>
        <img data-gravatar="http://www.gravatar.com/avatar/<?php echo md5( $bgauthemail ); ?>?s=40" class="load-gravatar avatar avatar-48 photo" height="40" width="40" src="<?php echo get_template_directory_uri(); ?>/library/images/nothing.gif" />
        <?php // end custom gravatar call ?>
        <?php printf(__( '<cite class="fn">%1$s</cite> %2$s', 'bonestheme' ), get_comment_author_link(), edit_comment_link(__( '(Edit)', 'bonestheme' ),'  ','') ) ?>
        <time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__( 'F jS, Y', 'bonestheme' )); ?> </a></time>

      </header>
      <?php if ($comment->comment_approved == '0') : ?>
        <div class="alert alert-info">
          <p><?php _e( 'Your comment is awaiting moderation.', 'bonestheme' ) ?></p>
        </div>
      <?php endif; ?>
      <section class="comment_content cf">
        <?php comment_text() ?>
      </section>
      <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
    </article>
  <?php // </li> is added by WordPress automatically ?>
<?php
} // don't remove this bracket!


/*
This is a modification of a function found in the
twentythirteen theme where we can declare some
external fonts. If you're using Google Fonts, you
can replace these fonts, change it in your scss files
and be up and running in seconds.
*/
function bones_fonts() {
  wp_enqueue_style('googleFonts', 'http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic');
}

add_action('wp_enqueue_scripts', 'bones_fonts');

/* DON'T DELETE THIS CLOSING TAG */ 

function is_mobile(){
  $useragents = array(
    'iPhone',          // iPhone
    'iPod',            // iPod touch
    'Android',         // 1.5+ Android
    'dream',           // Pre 1.5 Android
    'CUPCAKE',         // 1.5+ Android
    'blackberry9500',  // Storm
    'blackberry9530',  // Storm
    'blackberry9520',  // Storm v2
    'blackberry9550',  // Storm v2
    'blackberry9800',  // Torch
    'webOS',           // Palm Pre Experimental
    'incognito',       // Other iPhone browser
    'webmate'          // Other iPhone browser
  );
  $pattern = '/'.implode('|', $useragents).'/i';
  return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}


function custom_header($class){
  if(!is_mobile()){
  echo <<< EOM
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="/css/bace.css"/> 
</head>
<body>
    <div class="containe">
<div class="container content">
<h1 style="display:inline-block;">
<a href="/" title="任意売却・住宅ローンでお悩みなら｜弁護士法人サクセスト"><img class="sitename" src="/img/sample/02.jpg"></a>
</h1>
<a ><img class="chatbox sp-left" src="/img/sample/03.jpg"></a>
<span class="callma_tel_img"><img class="sitename sp-left" src="/img/sample/04_0120165019.jpg"></span>
<a href="/information/contact" class="op5"><img class="free-btn-head sp-left-ls" src="/img/sample/05.jpg"></a>
</div>

<div class="navbar navbar-default navbar-primary shadow" role="navigation">
<div class="container">

    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav text-center">
        <li class="shadow" ><a class="menu-btn" href="/">TOP</a></li>

        <li class="shadow dropdown" >
          <a href="#" class="dropdown-toggle menu-btn" date-toggle="dropdown" id="menu1">住宅ローン返済にお困りの方へ</a>
          <ul class="dropdown-menu text-center" role="menu" aria-labelledby="menu1">
            <li style="display:block" role="presentation"><a role="menuitem" tabindex="-1" href="/loan">住宅ローンについて</a></li>
            <li style="display:block" role="presentation"><a role="menuitem" tabindex="-1" href="/loan/answer">解決方法</a></li>
            <li style="display:block" role="presentation"><a role="menuitem" tabindex="-1" href="/loan/appeal">当法人の強み</a></li>
          </ul>
        </li>

<li class="shadow " ><a class="menu-btn" href="/Consultation">
相談事例</a></li>

<li class="shadow" ><a class="menu-btn" href="/Case">
相談手続・費用</a></li>

<li class="shadow" ><a class="menu-btn" href="/Information/question">
よくある質問</a></li>
<li class="shadow" ><a class="menu-btn" href="/info">
弁護士法人情報</a></li>

      </ul>
    </div>

</div>
</div>

    <div id="container">
EOM;
  }else{
    echo <<< EOM

  <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="/css/sp-bace.css"/> 
    
</head>
<body>
    <div class="row">
    <div class="col-xs-12">
        <div class="blue padding">
            <p class="negative-bottom">住宅ローンの支払いや滞納にお困りの方へ</p>
        </div>
    </div>
</div>


<!-- Static navbar -->
<div class="navbar navbar-default navbar-primary shadow" role="navigation">
<div class="container">
<div class="navbar-header">
<h1 class="pull-left sp-left-ls title">弁護士法人サクセスト</h1>
<button type="button" class="navbar-toggle"
data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav text-center">
<li class="shadow" ><a class="menu-btn" href="/">
TOP</a></li>


<!--spのみ-->
<li class="shadow" ><a href="/loan/answer">
解決方法</a></li>

<li class="shadow" ><a href="/loan/appeal">
当法人の強み</a></li>

<!--end-->

<li class="shadow " ><a class="menu-btn" href="/Consultation">
相談事例</a></li>

<li class="shadow" ><a class="menu-btn" href="/Case">
相談手続・費用</a></li>

<li class="shadow" ><a class="menu-btn" href="/Information/question">
よくある質問</a></li>
<li class="shadow" ><a class="menu-btn" href="/info">
弁護士法人情報</a></li>
</ul>
</div><!--/.nav-collapse -->

</div>
</div>
    <!-- end nav -->

EOM;
  }

}
add_filter('wp_head', 'custom_header');

function custom_footer(){
  if(!is_mobile()){
    echo <<< EOM
  <div id="footer">
      <footer class="footer border-top">
        <div class="container">
            <div class="pull-left">
           <img class="sitename" src="/img/sample/02.jpg">
           </div>
            <div class="pull-left sp-left">
                <ul class="sp-top footer-link">
                    <li><a href="/"><span class="glyphicon glyphicon-play">トップ</span></a></li>
                    <li><a href="/loan"><span class="glyphicon glyphicon-play">住宅ローン返済にお困りの方へ</span></a></li>
                    <li><a href="/Consultation"><span class="glyphicon glyphicon-play">相談事例</span></a></li>
                    <li><a href="/Case"><span class="glyphicon glyphicon-play">相談手続・費用</span></a></li>
                </ul>
           </div>
            <div class="pull-left sp-left">
                <ul class="sp-top footer-link">
                    <li><a href="/Information/question"><span class="glyphicon glyphicon-play">よくある質問</span></a></li>
                    <li><a href="/info"><span class="glyphicon glyphicon-play">弁護士法人情報</span></a></li>
                    <li><a href="/corporations"><span class="glyphicon glyphicon-play">法人のお客様はこちら</span></a></li>
                    <li><a href="/Information/privacy"><span class="glyphicon glyphicon-play">プライバシーポリシー</span></a></li>
                </ul>
           </div>
        </div>
        </footer>
      </div>
    </div>
  </div>
EOM;
  }else{
    echo <<< EOM
            <footer class="footer sp-top">
        <div class="container blue padding">
            <p class="border-bottom-white"> 住宅ローンの支払いや滞納にお困りの方へ</p>
            <p class="h3">弁護士法人サクセスト</p>
            <p class="border-top-white"> 悩まずお気軽にご連絡下さい</p>

            <ul class="sp-top footer-link">
                <li>
                    <li class=" sp-bottom-sm"><a href="/" class="border-bottom-white"><span class="glyphicon glyphicon-play">トップ</span></a></li>
                    <li class=" sp-bottom-sm"><a href="/loan" class="border-bottom-white"><span class="glyphicon glyphicon-play">住宅ローン返済にお困りの方へ</span></a></li>
                    <li class=" sp-bottom-sm"><a href="/Consultation" class="border-bottom-white"><span class="glyphicon glyphicon-play">相談事例</span></a></li>
                    <li class=" sp-bottom-sm"><a href="/Case" class="border-bottom-white"><span class="glyphicon glyphicon-play">相談手続・費用</span></a></li>
                    <li class=" sp-bottom-sm"><a href="/Information/question" class="border-bottom-white"><span class="glyphicon glyphicon-play">よくある質問</span></a></li>
                    <li class=" sp-bottom-sm"><a href="/info" class="border-bottom-white"><span class="glyphicon glyphicon-play">弁護士法人情報</span></a></li>
                    <li class=" sp-bottom-sm"><a href="/top/recruit" class="border-bottom-white"><span class="glyphicon glyphicon-play">採用情報</span></a></li>
                    <li class=" sp-bottom-sm"><a href="/corporations" class="border-bottom-white"><span class="glyphicon glyphicon-play">法人のお客様はこちら</span></a></li>
                    <li class=" sp-bottom-sm"><a href="/Information/privacy" class="border-bottom-white"><span class="glyphicon glyphicon-play">プライバシーポリシー</span></a></li>
                </li>
            </ul>
        </div>
        </footer>
EOM;
  }
}
add_filter('wp_footer', 'custom_footer');

function category_controll($test){

  echo <<< EOM
  <script>
    $(function(){
      var cat = $(".cat-item");
      var sub = [];
      cat.each(function(i, val){
        if(i >= 5){
          sub[i] = cat[i];
          cat[i].remove();
        }
      });

      if(sub.length){
      var add_tag = '<ul><li id="more_click" class="pointer">もっと見る</li></ul><ul class="sub-cat hides"></ul>';
      $(".widget_categories").append(add_tag);
        for(var i in sub){
          $(".sub-cat").append(sub[i]).hide();
        }
      }

      $("#more_click").on("click", function(){
          var text = '閉じる';
          if(!$(".sub-cat").hasClass('hides')){
           text = 'もっと見る';
          }
           $(".sub-cat").slideToggle(500).toggleClass('hides');
          $(this).text(text);
      });

      $("#wp-calendar").addClass("table table-bordered");
    });
  </script>
EOM;
}
add_filter('wp_head', 'category_controll');

function debug($val){
  print "<pre>";
  print_r($val);
  print "</pre>";
}

function wp_pagination() {
  global $wp_query;
  $big = 99999999;
  $page_format = paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $wp_query->max_num_pages,
    'type'  => 'array'
  ) );
  if( is_array($page_format) ) {
    $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
    echo '<div class="text-center"><ul class="pagination">';
    foreach ( $page_format as $page ) {
        echo "<li>$page</li>";
    }
      echo '</ul></div>';
  }
  wp_reset_query();
}

?>
