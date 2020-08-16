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
            <a href="<?php the_field('link_facebook') ?>">
                <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook.png"/>
            </a>
            <h1>Facebook</h1>
        </div>
        <div class="rede" id="instagran">
            <a href="<?php the_field('link_instagram') ?>">
                <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/instagram.png">
            </a>
            <h1>Instagram</h1>
        </div>
        <div class="rede" id="twitter">
            <a href="<?php the_field('link_twitter') ?>">
            <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/twitter.png">
            </a>
            <h1>Twitter</h1>
        </div>
    </section>
<?php get_footer(); ?>