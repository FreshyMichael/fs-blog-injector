<?php
/**
* Plugin Name: FreshySites Blog Injector
* Plugin URI: https://github.com/FreshyMichael/fs-blog-injector
* Description: Inject content into post loop output based on # of posts displayed
* Version: 1.0.0
* Author: FreshySites
* Author URI: https://freshysites.com/
* License: GNU v3.0
*/

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

/* FreshySites Blog Injector Start */
//______________________________________________________________________________
add_action( 'loop_start', 'fs_890531_loop_start' );

function fs_890531_loop_start( $query )
{
    if( $query->is_main_query() )
    {
        add_filter( 'the_content', 'fs_890531_the_content' );
        add_action( 'loop_end', 'fs_890531_loop_end' );
    }
}

function fs_890531_the_content( $content )
{
    static $nr = 0;

    if( 0 === ++$nr % 4 )
        $content .= '<div style="margin-top:25px; margin-bottom:25px; clear:both;"><img src="https://freshysites.com/wp-content/uploads/fs-formal-horizontal.svg" width="100%"></div>';

    return $content;
}

function fs_890531_loop_end()
{
    remove_action( 'the_post', 'fs_890531_the_content' );
}

//______________________________________________________________________________
// All About Updates

//  Begin Version Control | Auto Update Checker
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
// ***IMPORTANT*** Update this path to New Github Repository Master Branch Path
	'https://github.com/FreshyMichael/fs-blog-injector',
	__FILE__,
// ***IMPORTANT*** Update this to New Repository Master Branch Path
	'fs-blog-injector'
);
//Enable Releases
$myUpdateChecker->getVcsApi()->enableReleaseAssets();
//Optional: If you're using a private repository, specify the access token like this:
//
//
//Future Update Note: Comment in these sections and add token and branch information once private git established
//
//
//$myUpdateChecker->setAuthentication('your-token-here');
//Optional: Set the branch that contains the stable release.
//$myUpdateChecker->setBranch('stable-branch-name');

//______________________________________________________________________________
/* FreshySites Blog Injector End */
?>
