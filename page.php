<?php get_header(); ?>
<main>
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-9">
            <!-- Chamando arquivo, reutilizando página  -->
            <?php get_template_part('_detalhe'); ?>
        </div>

        <!-- SIDEBAR -->
        <div class="col-xs-12 col-sm-12 col-md-3">
            <?php get_sidebar(); ?>
        </div>

    </div>
</main>
<?php get_footer(); ?>