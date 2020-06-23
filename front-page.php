<?php
/*
	Template Name: Nosotros
 */
 get_header(); ?>

</div>

<section class="slider">

    <?php get_template_part('partes/index', 'slider'); ?>

</section>

<div class="wrapper">

    <!-- BUSCADOR -->
    <?php get_template_part('searchform'); ?>
    <!-- FIN BUSCADOR -->

    <section class="tours clear">

        <?php get_template_part('partes/index', 'tours'); ?>

    </section>
    <!--.tours -->

    <section class="consejos-testimoniales clear">
        <div class="grid2-3">

            <?php get_template_part('partes/index', 'consejos'); ?>

        </div>
        <div class="grid1-3">
            <?php get_template_part('partes/index', 'testimoniales'); ?>
        </div>
    </section>

    <?php get_footer(); ?>