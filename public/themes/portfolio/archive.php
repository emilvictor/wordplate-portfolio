<?php get_header(); ?>

<?php single_term_title( string $prefix = '', bool $display = true ) ?>

<div class="row">
    <div class="col-sm">
        <?php if (have_posts()): ?>

            <?php while (have_posts()): the_post(); ?>

                <h1><?php the_title(); ?></h1>

                    

                <?php the_content(); ?>

            <?php endwhile; ?>

        <?php endif; ?>
    </div>
            
</div>

   

<?php get_footer(); ?>