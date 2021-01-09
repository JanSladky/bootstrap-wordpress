<?php get_header() ?>
 
<main>
    <div class="container">
        <section class="posts">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post() ?>

                <h3><?php the_title() ?></h3>
                <p><?php the_content() ?></p>
            <?php endwhile ?>
            <?php else : ?>
                <p>Nic tu není :-P</p>
            <?php endif ?>
        </section>
    </div>
   
</main>



<?php get_footer() ?>