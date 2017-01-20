<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package moudod
 */

get_header(); ?>
    <section class="clubs">

        <div class="container">
            <div class="row">


                <div class="clubs__box">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <div class="clubs__item">

                            <div class="clubs__item--left">

                                <div class="clubs__item--img">

                                    <?php the_post_thumbnail(); ?>

                                </div>

                            </div>

                            <div class="clubs__item--right">

                                <h3><?php the_title(); ?></h3>

                                <?php $address = fw_get_db_post_option(get_the_ID(), 'address');
                                if (!empty($address)):?>
                                    <span class="clubs__item--address">адрес: <?php echo $address; ?></span>
                                <?php endif; ?>
                                <?php $phone = fw_get_db_post_option(get_the_ID(), 'phone');
                                if (!empty($phone)):?>
                                    <a href="tel:<?php echo $phone; ?>"
                                       class="clubs__item--tel">телефон: <?php echo $phone; ?></a>
                                <?php endif; ?>
                                <?php $email = fw_get_db_post_option(get_the_ID(), 'email');
                                if (!empty($email)):?>
                                    <a href="mailto:<?php echo $email; ?>"
                                       class="clubs__item--tel">e-mail: <?php echo $email; ?></a>
                                <?php endif; ?>
                                <p><?php $content = get_the_content();
                                    echo wp_filter_nohtml_kses($content); ?></p>
                                <?php $whours = fw_get_db_post_option(get_the_ID(), 'whours');
                                if (!empty($whours)):?>
                                    <span class="clubs__item--working">режим работы: <?php echo $whours; ?></span>
                                <?php endif; ?>
                                <?php $vk = fw_get_db_post_option(get_the_ID(), 'vk');
                                if ($vk !== '#'):?>
                                    <a href="<?php echo $vk; ?>" class="clubs__item--social" target="_blank"><i
                                            class="fa fa-vk" aria-hidden="true"></i></a>
                                <?php endif; ?>
                            </div>

                        </div>
                    <?php endwhile;
                    the_posts_pagination(array(
                        'show_all' => true, // показаны все страницы участвующие в пагинации
                        'end_size' => 1, // количество страниц на концах
                        'mid_size' => 1, // количество страниц вокруг текущей
                        'prev_next' => false, // выводить ли боковые ссылки "предыдущая/следующая страница".
                        'screen_reader_text' => '',
                    )); endif;?>

                </div>


            </div>
        </div>

    </section>
<?php get_footer();