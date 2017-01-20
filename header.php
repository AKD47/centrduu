<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package moudod
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>
<body>
<!-- open .header-->
<header class="header">

	<div class="container">
		<div class="row">
			<div class="header__logo">
				<a href="/" class="header__logo--img">
					МОУДОД «ДОМ ДЕТСКОГО ТВОРЧЕСТВА ВОРОШИЛОВСКОГО РАЙОНА ГОРОДА ДОНЕЦКА»
				</a>
			</div>

			<div class="header__navbar">
				<nav class="navbar navbar-default" role="navigation">
					<div class="container-fluid">

						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse"
							        data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>

						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<?php wp_nav_menu(array(
								'theme_location'  => 'primary',
								'menu_class'      => 'nav navbar-nav',
							)); ?>							

						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</div>


		</div>
	</div>

</header>
<!-- close .header -->

