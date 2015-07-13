<?php
 
    if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
        die ('Por favor no cargue esta pagina directamente. Gracias!');
 
    if ( post_password_required() ) { ?>
        Este articulo esta protegido con password. Ingresa la clave.
    <?php
        return;
    }
?>
 
<?php if ( have_comments() ) : ?>
 
    <h2 id="comments"><?php comments_number('Sin respuestas', 'Una respuesta', '% respuestas' );?></h2>
 
    <div class="navigation">
        <div class="next-posts"><?php previous_comments_link() ?></div>
        <div class="prev-posts"><?php next_comments_link() ?></div>
    </div>
 
    <ol class="commentlist">
        <?php wp_list_comments(); ?>
    </ol>
 
    <div class="navigation">
        <div class="next-posts"><?php previous_comments_link() ?></div>
        <div class="prev-posts"><?php next_comments_link() ?></div>
    </div>
 
 <?php else : // esto se muestra si no hay comentarios?>
 
    <?php if ( comments_open() ) : ?>
 
     <?php else : // comentarios cerrados ?>
        <p>Comentarios Cerrados.</p>
 
    <?php endif; ?>
 
<?php endif; ?>
 
<?php if ( comments_open() ) : ?>
 
<div id="respond">
 
    <h2><?php comment_form_title( 'Deja un comentario', 'Deja un comentario para %s' ); ?></h2>
 
    <div class="cancel-comment-reply">
        <?php cancel_comment_reply_link(); ?>
    </div>
 
    <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
        <p>Debes debe estar <a href="<?php echo wp_login_url( get_permalink() ); ?>">logueado</a> para poder comentar.</p>
    <?php else : ?>
 
    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
 
        <?php if ( is_user_logged_in() ) : ?>
 
            <p>Logueado como <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Desconectarse">Desconectarse.</a></p>
 
        <?php else : ?>
 
            <div>
                <input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
                <label for="author">Nombre <?php if ($req) echo "(requerido)"; ?></label>
            </div>
 
            <div>
                <input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
                <label for="email">E-Mail (no sera publicado) <?php if ($req) echo "(requerido)"; ?></label>
            </div>
 
            <div>
                <input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
                <label for="url">Pagina Web</label>
            </div>
 
        <?php endif; ?>
 
        <!--<p>You can use these tags: <code><?php echo allowed_tags(); ?></code></p>-->
 
        <div>
            <textarea name="comment" id="comment" cols="58" rows="10" tabindex="4"></textarea>
        </div>
 
        <div>
            <input name="submit" type="submit" id="submit" tabindex="5" value="Enviar comentario" />
            <?php comment_id_fields(); ?>
        </div>
 
        <?php do_action('comment_form', $post->ID); ?>
 
    </form>
 
    <?php endif; // ISi la registracion es requerida y el usuario no esta logueado... ?>
 
</div>
 
<?php endif; ?>
