<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package moudod
 */

get_header(); ?>
    <section class="news">

        <div class="container">
            <div class="row">

                <div class="news__box">


                    <?php
                    while (have_posts()) : the_post(); ?>
                        <div class="news__item">

                            <div class="news__item--img">

                                <?php the_post_thumbnail(); ?>

                            </div>

                            <div class="news__item--content">

                                <h3><?php the_title(); ?></h3>

                                <a href="<?php the_permalink(); ?>"><?php $content = get_the_content();
                                    echo wp_filter_nohtml_kses($content); ?></a>

                                <span class="date">Опубликовано <?php echo get_the_date('d.m.Y'); ?></span>

                            </div>

                        </div>
                    <?php endwhile; // End of the loop.
                    the_posts_pagination(array(
                        'show_all' => true, // показаны все страницы участвующие в пагинации 
                        'end_size' => 1, // количество страниц на концах 
                        'mid_size' => 1, // количество страниц вокруг текущей 
                        'prev_next' => false, // выводить ли боковые ссылки "предыдущая/следующая страница". 
                        'screen_reader_text' => '',
                    )); ?>
                    

                </div>

            </div>
        </div>

    </section>
<?php
get_footer();
