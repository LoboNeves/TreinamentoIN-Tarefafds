<?php
    // Template Name: Noticias
?>

<?php get_header(); ?>
    <?php
    $paged=get_query_var('paged', 1);
    $news= new WP_Query(
        array(
            'posts_per_page'=>2,
            'paged'=>$paged,
            'post_type'=>'noticia',
            'post_status'=>'publish',
            'suppress_filters'=>true,
            'orderby'=>'name',
            'order'=>'ASC'
        )
    );?>
    <h1>Notícias</h1>
    <div id='news-container' class='container'>
    <?php if($news->have_posts()):
    while($news->have_posts()):
        
        $news -> the_post(); ?>
        
            <div class='news card'>
                <h2> <?php  the_title(); ?></h2>
                <?php the_content();?>
            </div>
        
    <?php endwhile;
    else:?>
    <p>Nao temos noticias</p>
    <?php endif; ?>
    </div>
    <div id='news-pgnt'>
    <?php    
    $big = 999999999;
    echo paginate_links( array(
        'base'=> str_replace($big, '%#%', get_pagenum_link($big)),
        'format'=>'?paged=%#%',
        'current'=>max(1, get_query_var('paged')),
        'prev_text'=> __('Anterior'),
        'next_text'=> __('Proximo'),
        'total'=>$news ->max_num_pages)
    );
    ?>
    <?php  wp_reset_postdata();?> 
    </div>
<?php get_footer(); ?>