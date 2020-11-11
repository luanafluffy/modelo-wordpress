<div class="row">
    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>
            <div class="row text-center">
                <h1 class="text-uppercase"><?php the_title(); ?></h1>
                <small>Postado em <?php the_time('d/M/Y') ?> <?php edit_post_link('(Editar)'); ?></small>
            </div>
            <div>
                <blockquote class="row row text-justify">
                    <p><?php the_excerpt(); ?></p>
                </blockquote>
            </div>
            <div class="row text-justify">
                <?php the_content(); ?>
            </div>
            <div class="row text-center">
                <p><?php previous_post_link(); ?> &nbsp;&nbsp; <?php next_post_link(); ?></p>
            </div>
        <?php endwhile; ?>

    <?php else : ?>
        <p class="text-center">Não existe conteúdo aqui.</p>
        <!-- Se não existir posts -->
    <?php endif; ?>

</div>