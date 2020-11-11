<div class="row">
    <!-- Exibindo POSTS -->
    <?php if (have_posts()) : ?>
        <?php $contador = 1; ?>

        <!-- contador de posts para não passar quantidade de posts -->
        <?php while (have_posts()) : the_post(); ?>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <?php if (the_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail('full'); ?>" alt="imagem"> <!-- tamanho de imagens de destaque -->
                    <?php endif; ?>

                    <div class="caption">
                        <h3><?php the_title(); ?></h3>
                        <small>Postado em <?php the_time('d/M/Y') ?> <?php edit_post_link('(Editar)'); ?></small><br />
                        <p><?php the_excerpt(); ?></p>
                        <p><a href="<?php the_permalink(); ?>" class="btn btn-primary" role="button">Ver mais...</a></p>
                    </div>
                </div>
            </div>
            <?php if ($contador == 4) : ?>
</div>
<div class="row">
    <?php $contador = 1; ?>
<?php endif;
            $contador++; ?>

<?php endwhile; ?>
<?php else : ?>

    <p class="text-center">Não existe conteúdo aqui.</p>
    <!-- Se não existir posts -->
<?php endif; ?>

</div>
<div class="row">
    <div class="text-center">
        <p><?php next_posts_link(' Artigos Anteriores &raquo;'); ?> <?php previous_posts_link('&laquo; Artigos Recente') ?></p>
    </div>
</div>