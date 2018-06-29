<?php /* Template Name: Home Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="hp-section">

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                <section class="hp-canvas">
                <?php 

                $images = get_field('slideshow_home');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)

                if( $images ): ?>
                    <div class="swiper-home swiper-container">
                        <div class="swiper-wrapper">
                        <?php foreach( $images as $image ): ?>
                            <!-- Slides -->
                            <div class="swiper-slide"><?php echo wp_get_attachment_image( $image['ID'], $size ); ?></div>
                        <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                <?php endif; ?>
                </section>
                <!-- article -->
                <?php the_content(); ?>
                    <!-- /article -->

                <?php endwhile; ?>
                
            <?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
