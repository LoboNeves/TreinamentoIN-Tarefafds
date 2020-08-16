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
    <section class="icones">
        <div class="rede" id="facebook">
            <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook.png"/>
            <h1>Facebook</h1>
        </div>
        <div class="rede" id="instagran">
            <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/instagram.png">
            <h1>Instagram</h1>
        </div>
        <div class="rede" id="twitter">
            <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/twitter.png">
            <h1>Twitter</h1>
        </div>
    </section>
<?php get_footer(); ?>