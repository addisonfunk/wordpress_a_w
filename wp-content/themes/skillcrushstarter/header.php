<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */
?>
<!DOCTYPE html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title('|', true, 'right'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link href='http://fonts.googleapis.com/css?family=Codystar' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,400' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
  <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
  <link rel="stylesheet" href="//cdn.jsdelivr.net/flexboxgrid/6.3.0/flexboxgrid.min.css" type="text/css" >
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header class="page-header container">

			<a href="<?php echo site_url(); ?>" class="top-logo">
				<div class="row">
        <div class="col-lg-12" style="text-align: center;">
          <span class="title"><?php bloginfo('name'); ?></span>
          </div>
              <div class="col-lg-12">
			   	<span class="sub-title"
                style="font-family: 'Pompiere', cursive;
                       font-size: 1.5em;
                       letter-spacing: 5px;
                       text-align: center;">
                       <?php bloginfo('description'); ?></span>
                       </div>
        </div>
			</a>

      <div class="header-nav">
         <ul>
  				  <?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?>
         </ul>
     </div>

		</header>

		<div id="main" class="site-main">








