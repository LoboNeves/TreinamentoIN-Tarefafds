<?php  
// Template Post Type: noticia
?>
<?php get_header(); ?>

<main id='single-noticia' class='container'>
    <div class='card'>
        <div>
            <h1><?php the_title() ?></h1>
            <div>
                <p>Criando em:<?php  echo get_the_date()?></p>
                <p>Editado em:<?php  echo get_the_modified_date()?></p>
            </div>
        </div>
        <?php
        while (have_posts()):
            the_post();
            the_content();
        endwhile;
        ?>
    </div>
    <?php

    $news= new WP_Query(
        array(
            'posts_per_page'=>3,
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
        <a href="/noticias" class='news card'>Clique aqui para ver todas as notícias</a>
    </div>
    
</main>

<?php get_footer(); ?>