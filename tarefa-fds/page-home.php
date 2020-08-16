<?php
    // Template Name: Home Page
?>
            <!--   ---------- Section 1  ------------       -->
<?php get_header(); ?> 
    <section class="section-1">
        <div id="imagem-section-1">
            <img src="<?php the_field('imagem_de_fundo') ?>">
        </div>​
        <div id="texto-da-section-1">
            <?php the_field('titulo_chamativo') ?>
        </div>​
    </section>

        <!--   ---------- Section 2 -------------       -->
    <section class="section-2">
        <div id="texto-da-section-2">
            <p>Resumo da página sobre</p>
            <a href="/sobre">Saiba mais</a>
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
                <div href="/produtos/" class='news card'>
                    <h2> <?php  the_title(); ?></h2>
                    <a href="<?php the_permalink(); ?>">Link para o produto</a>
                    <?php the_content();?>
                </div> 
            <?php endwhile;
        else:?>
            <p>Nao temos noticias</p>
        <?php endif; ?>
        <a href="/produtos" class='news card'>Clique aqui para ver todos produtos</a>
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
                <div href="/noticias/" class='news card'>
                    <h2> <?php  the_title(); ?></h2>
                    <a href="<?php the_permalink(); ?>">Link para a notícia</a>
                    <?php the_content();?>
                </div> 
            <?php endwhile;
        else:?>
            <p>Nao temos noticias</p>
        <?php endif; ?>
    </div>

<?php get_footer(); ?>   
</body>
</html>