<?php
/**
 * Creare Magazin Online functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Creare_Magazin_Online
 */

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

if ( ! function_exists( 'creare_magazin_online_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function creare_magazin_online_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Creare Magazin Online, use a find and replace
	 * to change 'creare-magazin-online' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'creare-magazin-online', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
 
	
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'creare-magazin-online' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'creare_magazin_online_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );


 


}
endif;
add_action( 'after_setup_theme', 'creare_magazin_online_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function creare_magazin_online_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'creare_magazin_online_content_width', 640 );
}
add_action( 'after_setup_theme', 'creare_magazin_online_content_width', 0 );




add_filter( 'wp_nav_menu_objects', 'add_menu_parent_class' );
function add_menu_parent_class( $items ) {

    $parents = array();
    foreach ( $items as $item ) {
        if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
            $parents[] = $item->menu_item_parent;
        }
    }

    foreach ( $items as $item ) {
        if ( in_array( $item->ID, $parents ) ) {
            $item->classes[] = 'dropdown';
        }
    }

    return $items;
}
 


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function creare_magazin_online_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'creare-magazin-online' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
 



	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'creare-magazin-online' ),
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="footer-title">',
		'after_title'   => '</h2>',
	) );
 

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'creare-magazin-online' ),
		'id'            => 'footer-2',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="footer-title">',
		'after_title'   => '</h2>',
	) );
 

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'creare-magazin-online' ),
		'id'            => 'footer-3',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="footer-title">',
		'after_title'   => '</h2>',
	) );
 

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 4', 'creare-magazin-online' ),
		'id'            => 'footer-4',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="footer-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'creare_magazin_online_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function creare_magazin_online_scripts() {
	wp_enqueue_style( 'creare-magazin-online-style', get_stylesheet_uri() );

	wp_enqueue_script( 'creare-magazin-online-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'creare-magazin-online-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'creare_magazin_online_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

  

 
function example_ajax_request() {
 
    // The $_REQUEST contains all the data sent via ajax
    if ( isset($_REQUEST) ) {
     
        $premium = $_REQUEST['premium'];
         
        // Let's take the data that was sent and do something with it
        if ( $premium == 'da' ) {
           update_option( 'proz', 'da' );
        } else

        {
        	update_option( 'proz', 'nu' );
        }
        
        // Now we'll return it to the javascript function
        // Anything outputted will be returned in the response
        echo $premium;
         
        // If you're debugging, it might be useful to see what was sent in the $_REQUEST
        // print_r($_REQUEST);
     
    }
     
    // Always die in functions echoing ajax content
   die();
}
 
add_action( 'wp_ajax_example_ajax_request', 'example_ajax_request' );
 
// If you wanted to also use the function for non-logged in users (in a theme for example)
// add_action( 'wp_ajax_nopriv_example_ajax_request', 'example_ajax_request' );










function themeslug_customize_register() { 

 
	?>
 
<script>


function myCallback() {
document.getElementById('___plusone_0').style.display = 'none';
 
}

function hidereview() {
document.getElementById('review').style.display = 'none';
}

function hidedonate() {
document.getElementById('buy').style.display = 'none';
}

 


jQuery(function($) { // DOM is now read and ready to be manipulated

  
<?php if(get_option('proz')  == "nu") { ?>
$( "#customize-info" ).after('<div id="customize-info" class="arata accordion-section customize-info"><div class="accordion-section-title"><span class="preview-notice"><strong class="panel-title site-title">Upgrade for Free</strong></span></div><div class="customize-panel-description" style="display: block;"><div class="textpro">If you can not afford to buy the premium version, you can get it for <u>free</u> if you leave a review or if you give us a like on Facebook.</div><div id="butoane" class="clearfix butoane"><br><div class="g-plusone" data-annotation="none" data-callback="myCallback" data-href="https://web8.ro"></div><a href="https://goo.gl/wh7Wdg"  id="review" class="button butonp" target="_blank" onclick="hidereview()">Say Thanks</a><a  onclick="hidedonate()" href="https://www.paypal.com/cgi-bin/webscr?business=paypal@web8.ro&cmd=_xclick&currency_code=USD&amount=2&item_name=Premium%20Version" target="_blank" id="buy" class="button butonp">PayPal 2 USD</a></div><p>Responsive WordPress websites are just a few of the web development services we offer. See how we also help agencies build better faster websites.</p><a href="https://web8.ro/quote/" id="quote" target="_blank" class="button butonp">Contact or Get a Quote</a></div></div>');
 <?php } ?>

<?php if(get_option('proz')  == "da") { ?>
$( "#customize-info" ).after('<div id="customize-info" class="arata accordion-section customize-info"><div class="customize-panel-description" style="display: block;"><p>Premium version is <span class="active">active</span>.</p><p>Do you want a custom wordpress theme ? </p><a href="https://web8.ro/quote/" id="quote" target="_blank" class="button butonp">Get a Quote</a></div></div>');
 <?php } ?>


<?php if(get_option('proz')  == "nu") { ?>
$( "#customize-theme-controls" ).after('<ul id="premium"><li class="accordion-section control-section control-section-default"><h3 class="accordion-section-title">Premium Item</h3></li><li class="accordion-section control-section control-section-default"><h3 class="accordion-section-title">Premium Item</h3></li></ul>');
 <?php } ?>


$( "#premium li" ).click(function() {
  $( ".textpro" ).css("background", "#FFAB91");
});

$( "#review" ).click(function() {
  $( "#goreview" ).css("display", "block");
    // This does the ajax request
    $.ajax({
        url: ajaxurl,
        data: {
            'action':'example_ajax_request',
            'premium' : "da"
        },
        success:function(data) {
            // This outputs the result of the ajax request
           // console.log(data);  
        },
        error: function(errorThrown){
           // console.log(errorThrown);
        }
    });  



});

 
 
}); 
</script>

<?php 

 

}


add_action( 'customize_controls_print_footer_scripts', 'themeslug_customize_register' );

function remove_theme_selector( $wp_customize ) {
 if(get_option('proz')  == "nu") {  
 $registered_sections = $wp_customize->sections();
    // loop over and remove each section
    foreach( $registered_sections as $section ) {
       $wp_customize->remove_section( $section->id );
    } 
	}
?>
<div class="full"></div>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<style>
#customize-info { display:none; } 
.butonp { margin-right:5px !important; } 
#premium .accordion-section-title:after { content: "\f313" !important; } 
.arata { display:block !important;} 
.textpro { padding: 10px 5px 10px 5px; margin-bottom: 10px; }
.full { display:none; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgba(0, 0, 0, 0.8); position: relative; z-index: 1000000;
}
span.active {
    color: #43A047;
    font-weight: bold;
}
.butoane .button {
    line-height: 22px !important;
    height: 24px !important;
}
div#___plusone_0 {
    margin-right: 5px !Important;
}
</style>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1625602520988509";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>





<?php
}
add_action( 'customize_register', 'remove_theme_selector' );


 