<?php $args = array(
			'post_type'  => 'slider',
			'orderby' => 'date',
			'order' => 'DESC',
			'posts_per_page' => -1
		); ?>

<?php $slider = new WP_Query($args); ?>
<div class="slider">
    <?php while($slider->have_posts()): $slider->the_post(); ?>

    <div>
        <a href="<?php the_field('enlace'); ?>">
            <?php the_post_thumbnail('slider'); ?>
        </a>
    </div>


    <?php endwhile; wp_reset_postdata(); ?>

</div>