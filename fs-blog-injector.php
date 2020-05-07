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
