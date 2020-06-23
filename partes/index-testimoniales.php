<h2 class="titulo">
    <span>Testimoniales</span>
</h2>


<?php $args = array(
						'post_type' => 'testimoniales',
						'posts_per_page' => 2,
						'order' => 'DESC',
						'orderby' => 'date',
					); ?>
<?php $testimoniales = new WP_Query($args); ?>
<?php while ($testimoniales->have_posts() ): $testimoniales->the_post(); ?>

<article class="testimonial">
    <blockquote>
        <p><?php echo substr(get_the_content(),0,150) . '...'; ?></p>
    </blockquote>
    <p class="testimonial"><?php the_field('nombre'); ?></p>
    <p class="testimonial"><?php the_field('ciudad'); ?></p>
</article>


<?php endwhile; wp_reset_postdata(); ?>

<a href="<?php echo get_permalink(26); ?>" class="naranja todos">Ver Todos</a>