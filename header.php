<?php
/**
 * The Header template for our theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
  <meta name="twitter:title" content="خرید دکانت ; قیمت دستریز عطر ، دکانت اورجینال">
  <meta name="twitter:text:description" content="خرید دکانت یا دستریز عطر و ادکلن اورجینال در معتبرترین فروشگاه عطر دکانت در ایران">
  <meta property="og:title" content="فروش و خرید ادکلن دکانت اصل و دستریز عطر اورجینال">
  <meta name="og:description" content="عطر دکانت یا دستریز همان ادکلن و عطر اورجینال استک رویال کلن معتبرترین و محبوب ترین فروشگاه دکانت ایران">
  <meta property="og:url" content="/shop/">
  <meta rel="canonical" href="/shop/">
</head>

<body <?php body_class(); ?>>
	<?php if ( function_exists( 'wp_body_open' ) ) : ?>
		<?php wp_body_open(); ?>
	<?php endif; ?>

	<?php do_action( 'woodmart_after_body_open' ); ?>

	<div class="website-wrapper">
		<?php if ( woodmart_needs_header() ) : ?>
			<?php if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) : ?>
				<header <?php woodmart_get_header_classes(); // phpcs:ignore ?>>
					<?php whb_generate_header(); ?>
				</header>
			<?php endif ?>

			<?php woodmart_page_top_part(); ?>
		<?php endif ?>
