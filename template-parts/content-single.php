<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package moudod
 */

?>
<section class="single-new">

	<div class="container">

		<div class="single-new__box">

			<h1 class="single-new__box--title"><?php the_title(); ?></h1>
			<div class="single-new__box--date"><?php echo get_the_date('d F Y'); ?></div>

			<div class="single-new__box--wrapper">

				<div class="single-new__box--img">
					<?php the_post_thumbnail(); ?>
				</div>

				<?php the_content(); ?>

			</div>

		</div>

	</div>

</section>
