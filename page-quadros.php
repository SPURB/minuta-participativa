<?php /* Template Name: Mapas */ ?>
<?php get_header(); ?>
    <div class="pure-g-r">

            <?php include('page-assets/topbar.php') ?>
            <div class="pure-u-1 menubar"  class="primary" data-step="5" data-intro="Aqui você pode baixar os estudos preliminares deste projeto.">
            <ul class="primary">
                <li><a href="<?php echo home_url()?>"><i class="icon-propose"></i> minuta participativa</a></li>
                <li><a href="<?php echo home_url().'/mapas'?>"><i class="icon-map"></i> Mapas</a></li>
                <li><a href="<?php echo home_url().'/quadros'?>" class="active"><i class="icon-propose "  class="active"></i> Quadros</a></li>
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
        <h1>Projeto de Lei Arco Jurubatuba | Quadros</h1> 
        <div class="main-text">
            <ul class="pl-lista-download">
                <li><a href="../wp-content/uploads/2018/02/ACJ_Quadro_1A.pdf" download>Quadro 1A ‐ Eixos estratégicos e ambientais</a></li>
                <li><a href="../wp-content/uploads/2018/02/ACJ_Quadro_1B.pdf" download>Quadro 1B ‐ Melhoramentos viários</a></li>
                <li><a href="../wp-content/uploads/2018/02/ACJ_Quadro_1C.pdf" download>Quadro 1C ‐ Áreas públicas destinadas para áreas verdes, parques e equipamentos públicos</a></li>
                <li><a href="../wp-content/uploads/2018/02/ACJ_Quadro_1D.pdf" download>Quadro 1D ‐ Favelas existentes no perímetro do PIU ACJ</a></li>
                <li><a href="../wp-content/uploads/2018/02/ACJ_Quadro_2.pdf" download>Quadro 2 ‐ Parâmetros de ocupação exceto cota ambiental</a></li>
                <li><a href="../wp-content/uploads/2018/02/ACJ_Quadro_2A.pdf" download>Quadro 2A ‐ Fatores de planejamento</a></li>
                <li><a href="../wp-content/uploads/2018/02/ACJ_Quadro_3.pdf" download>Quadro 3 ‐ Programa de intervenções</a></li>
            </ul>
            <p><a href="../wp-content/uploads/2018/02/PL-ARCO-JURUBATUBA_QUADROS.rar">Baixe aqui todos os quadros.</a></p>
        </div>

        </div>
    </div>

    <div id="modal-content-box" class="pure-g-r" style="display:none"></div>
<?php get_footer(); ?>
