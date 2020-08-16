<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa-fds</title>
    <?php wp_head()?>
</head>
<body>
    <header>
        <nav class="container">
            <p><a href="<?php echo get_home_url(); ?>">Logo</a></p>
            <?php 
                $args = array(
                    'menu' => 'principal',
                    'theme_location' => 'navegacao',
                    'container' => false
                );
                wp_nav_menu( $args ) 
            ?>
        </nav>
    </header>