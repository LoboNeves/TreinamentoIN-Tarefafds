<?php
    // Template Name: Contato
?>

<?php get_header(); ?>
    <form action="#" method="post">
        <div>
            <label for="name">Nome:</label>
            <input type="text" id="name" name="usuario_nome"/>
        </div>
        <div>
            <label for="mail">E-mail:</label>
            <input type="email" id="mail" name="usuario_email"/>
        </div>
        <div>
            <label for="msg">Mensagem:</label>
            <textarea id="msg" name="usuario_msg"></textarea>
        </div>
        <div class="button">
            <button type="submit">Enviar sua mensagem</button>
        </div>
    </form>
<?php get_footer(); ?>