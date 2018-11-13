add_action( 'admin_menu', 'remove_menu_pages', 999);
function remove_menu_pages() {
  global $current_user;
   
  $user_roles = $current_user->roles;
  $user_role = array_shift($user_roles);
  if($user_role == "shop_manager") {
    $remove_submenu = remove_submenu_page('woocommerce', 'wc-settings'); // Remove Setting Woocomerce submenu
    $remove_submenu = remove_submenu_page('woocommerce', 'wc-addons');	 // Remove Addons Woocomerce submenu 
	$remove_submenu = remove_menu_page('link-manager.php'); //Links
    $remove_submenu = remove_menu_page('tools.php'); //Tools
	$remove_submenu = remove_menu_page('vc-welcome');  //Composer Welcome
	$remove_submenu = remove_menu_page('users.php'); //User
	$remove_submenu = remove_menu_page('edit-comments.php'); //Comments
	$remove_submenu =  remove_menu_page( 'edit.php' );                   //Posts 
  	$remove_submenu = remove_menu_page( 'edit.php?post_type=page' );    //Pages
	$remove_submenu = remove_menu_page( 'edit.php?post_type=portfolio' );    //Portfolio
	$remove_submenu = remove_menu_page( 'edit.php?post_type=testimonial' );    //Testimonials 
	$remove_submenu = remove_menu_page( 'edit.php?post_type=client' );    //Client
	$remove_submenu = remove_menu_page( 'edit.php?post_type=template' );    //Template 
	$remove_submenu = remove_menu_page( 'edit.php?post_type=layout' );    //Layout  
	$remove_submenu = remove_menu_page( 'edit.php?post_type=slide' );    //slider
	$remove_submenu = remove_menu_page( 'edit.php?post_type=offer ' );    //Offer   
	$remove_submenu =   remove_menu_page( 'wpcf7' ); //Contact Form 7
	 
	  
  }
}

