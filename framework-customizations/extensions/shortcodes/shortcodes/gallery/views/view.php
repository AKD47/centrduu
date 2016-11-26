<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
} ?>

<section class="top-slider">
    <div class="container">
        <div class="row">
            <div class="top-slider__box">
	            <?php foreach( $atts['slides'] as $slide): ?>
		            <div class="top-slider__box--item">
			            <div class="top-slider__box--img">
				            <img src="<?php echo $slide['image']['url']; ?>" alt="">
			            </div>
			            <div class="top-slider__box--content">
				            <?php echo $slide['descr']; ?>
			            </div>
		            </div>
	            <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
