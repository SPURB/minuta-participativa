<?php /* Template Name: Consulta */ ?>
<?php get_header(); ?>

    <div class="pure-g-r">

       <?php include('page-assets/topbar.php') ?>

        <div class="pure-u-1 menubar"  class="primary" data-step="5" data-intro="Aqui você pode baixar os estudos preliminares deste projeto.">
            <ul class="primary">
                <li><a href="<?php echo home_url()?>" class="active"><i class="icon-propose"></i> minuta participativa</a></li>
                <li><a href="<?php echo home_url().'/mapas'?>"><i class="icon-map"></i> Mapas</a></li>
                <li><a href="./#"><i class="icon-propose "></i> Diagnóstico</a></li>
                <li><a href="./#"><i class="icon-propose "></i> Quadros</a></li>
            </ul>
            <ul class="secondary">
                <li><a class="help-button" href="#">Ajuda</a></li>
                <?php if ( is_user_logged_in() ) :
                    global $current_user;
                    get_currentuserinfo();

                    if (!empty($current_user->user_firstname)) {
                        $logged_in_user = $current_user->user_firstname . ' ' . $current_user->user_lastname;
                    }else {
                        $logged_in_user = $current_user->user_login;
                    }
                ?>
                <li>
                    <a href="#">Olá, <?php echo $logged_in_user; ?> | </a>
                    <a href="<?php echo wp_logout_url(); ?>" title="Sair">Sair</a>
                </li>
                <?php else : ?>
                <li><a class="register-button" href="<?php bloginfo('url'); ?>/wp-login.php?action=register">Cadastre-se</a></li>
                <li><a class="login-button" href="<?php bloginfo('url'); ?>/wp-login.php">Login</a></li>
                <?php endif; ?>
            </ul>
        </div>


        <div class="pure-u-3-5 content">
            <?php query_posts('category_name=Consulta'); while (have_posts()) : the_post(); ?>

            <h1 data-step="1" data-intro="Bem vindo a consulta pública que define termos para o Projeto de Lei do Arco Jurubatuba. Clique em 'Próximo' para entender como este site funciona ou 'Pular' para sair da ajuda inicial."><?php the_title(); ?></h1>
            <div class="comments-bar">
                <i class="icon-comment-bg"></i>
                <span class="count-comment">Total de comentários <?php $comments = wp_count_comments($post->ID); echo "(" . $comments->approved . ")"; ?></span>
            </div>
            <div class="main-text">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
        </div>
        <?php include('page-assets/sidebar.php')?>
    </div>

    <div id="modal-content-box" class="pure-g-r" style="display:none"></div>
<?php get_footer(); ?>
