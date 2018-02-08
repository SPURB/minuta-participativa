<?php /* Template Name: Mapas */ ?>
<?php get_header(); ?>
    <div class="pure-g-r">

            <?php include('page-assets/topbar.php') ?>
            <div class="pure-u-1 menubar"  class="primary" data-step="5" data-intro="Aqui você pode baixar os estudos preliminares deste projeto.">
            <ul class="primary">
                <li><a href="<?php echo home_url()?>"><i class="icon-propose"></i> minuta participativa</a></li>
                <li><a href="<?php echo home_url().'/mapas'?>" class="active"><i class="icon-map"></i> Mapas</a></li>
                <li><a href="<?php echo home_url().'/quadros'?>"><i class="icon-propose"></i> Quadros</a></li>
                <li><a href="../wp-content/uploads/2018/02/NOTA_TECNICA_PLANO_URBANISTICO.pdf" download><i class="icon-propose"></i> Nota Técnica</a></li>
            </ul>
            <ul class="secondary">
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
        <h1>Projeto de Lei Arco Jurubatuba | Mapas</h1> 
        <div class="main-text">
            <ul class="pl-lista-download">
                <li><a href="../wp-content/uploads/2018/02/1_PLANO_URBANISTICO.pdf" download>Mapa 1 - Plano urbanístico</a></li>
                <li><a href="../wp-content/uploads/2018/02/2_PERIMETROS_DE_ADESAO_E_PERIMETRO_EXPANDIDO.pdf" download>Mapa 2 - Perímetro de adesão perímetro expandido</a></li>
                <li><a href="../wp-content/uploads/2018/02/3_PARAMETROS_URBANISTICOS.pdf" download>Mapa 3 - Parâmetros urbanísticos</a></li>
                <li><a href="../wp-content/uploads/2018/02/4_COMPARTIMENTOS AMBIENTAIS E SISTEMA DE DRENAGEM.pdf" download>Mapa 4 - Compartimento de várzea</a></li>
                <li><a href="../wp-content/uploads/2018/02/5_FAVELAS_ZEIS.pdf" download>Mapa 5 - Favelas e ZEIS</a></li>
                <li><a href="../wp-content/uploads/2018/02/6_AREAS_VERDES.pdf" download>Mapa 6 - Áreas verdes</a></li>
                <li><a href="../wp-content/uploads/2018/02/7_PLANO_MELHORAMENTOS_VIARIOS.pdf" download>Mapa 7 - Melhoramentos viários</a></li>
                <li><a href="../wp-content/uploads/2018/02/8_PROGRAMA_DE_INTERVENCOES.pdf" download>Mapa 8 - Programa de intervenções</a></li>
                <li><a href="../wp-content/uploads/2018/02/9_PROJETO_ESTRATEGICO_INTERLAGOS.pdf" download>Mapa 9 - Projeto Estratégico Interlagos</a></li>
            </ul>
        </div>

        </div>
    </div>

    <div id="modal-content-box" class="pure-g-r" style="display:none"></div>
<?php get_footer(); ?>
