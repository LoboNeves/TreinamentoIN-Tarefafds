<?php
    // Template Name: Sobre
?>

<?php get_header(); ?>
    <div class="container" id = "sobre">
        <img src="<?php the_field('imagem_sobre') ?>">
    </div>
    <br><br>
    <section class="section-2">
        <div id="texto-da-section-2">
            <?php the_field('texto_sobre') ?>
        </div>​
    </section>
<?php get_footer(); ?>