<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$news = new WP_Query(array(
	'posts_per_page' => 5,
	'category_name' => 'news'
));

?>
<section class="news">

    <div class="container">
        <div class="row">

            <div class="news__box">

	            <?php // Цикл
	            if ( $news->have_posts() ) :
		            while ( $news->have_posts() ) :
			            $news->the_post(); ?>
			            <div class="news__item">
				            <div class="news__item--img">
					           <?php the_post_thumbnail(); ?>
				            </div>
				            <div class="news__item--content">
					            <h3><?php the_title(); ?></h3>
					            <a href="<?php the_permalink(); ?>">
						            <p><?php $content = get_the_content();
							            echo wp_filter_nohtml_kses( $content );?></p>
					            </a>
					            <span class="date">Опубликовано <?php echo get_the_date('d.m.Y'); ?></span>
				            </div>

			            </div>
			            <?php
		            endwhile;
	            endif;
	            /* Возвращаем оригинальные данные поста. Сбрасываем $post. */
	            wp_reset_postdata();?>

            </div>

        </div>
    </div>

</section>