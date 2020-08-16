<?php
    // Template Name: Home Page
?>

<?php get_header(); ?> 
    <section class="section-1">
        <div id="imagem-section-1">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/imagem-fundo.jpg">
        </div>​
        <div id="texto-da-section-1">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus eu mi ac aliquam. Cras finibus, purus non aliquet molestie, lacus quam fermentum eros, eu varius massa justo eu est. Maecenas aliquet ut odio eu egestas
        </div>​
    </section>
        <!--   ---------- Section 3 -   PRODUTOS ------------       -->
    <?php

    $news= new WP_Query(
        array(
            'posts_per_page'=>4,
            'paged'=>$paged,
            'post_type'=>'produto',
            'post_status'=>'publish',
            'suppress_filters'=>true,
            'orderby'=>'rand',
            'order'=>'ASC'
        )
    );?>


    <div id='news-container' class='container'>
        <?php if($news->have_posts()):
            while($news->have_posts()):    
                $news -> the_post(); ?>
                <a href="/produtos/" class='news card'>
                    <h2> <?php  the_title(); ?></h2>
                    <?php the_content();?>
                </a> 
            <?php endwhile;
        else:?>
            <p>Nao temos noticias</p>
        <?php endif; ?>
    </div>



    <!--   ---------- Section 4 -   Noticia ------------       -->
    <?php

    $news= new WP_Query(
        array(
            'posts_per_page'=>4,
            'paged'=>$paged,
            'post_type'=>'noticia',
            'post_status'=>'publish',
            'suppress_filters'=>true,
            'orderby'=>'date',
            'order'=>'DESC'
        )
    );?>


    <div id='news-container' class='container'>
        <?php if($news->have_posts()):
            while($news->have_posts()):    
                $news -> the_post(); ?>
                <a href="/noticias/" class='news card'>
                    <h2> <?php  the_title(); ?></h2>
                    <?php the_content();?>
                </a> 
            <?php endwhile;
        else:?>
            <p>Nao temos noticias</p>
        <?php endif; ?>
    </div>

<?php get_footer(); ?>   
</body>
</html>