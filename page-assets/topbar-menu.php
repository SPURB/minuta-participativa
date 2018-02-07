    <div class="pure-g-r">
        <div class="pure-u-1 topbar">
            <a href="http://gestaourbana.prefeitura.sp.gov.br/" class="logo-gestao">Gestão Urbana SP</a>
            <a href="http://gestaourbana.prefeitura.sp.gov.br/" class="voltar-gestao">Voltar</a>
            <p>Consulta pública do Projeto de Lei do Arco Jurubatuba</p>
            <div class="socialbar pure-g-r">
                <div class="pure-u-1-3">
                    <a href="#"
                    class="uibutton confirm"
                      onclick="
                        window.open(
                          'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),
                          'facebook-share-dialog',
                          'width=626,height=436');
                        return false;">
                        <i class="icon-facebook"></i>
                      Compartilhar
                    </a>
                </div>
                <div class="pure-u-1-3">
                    <a href="https://twitter.com/share" class="twitter-share-button" data-lang="pt" data-size="80">Tweetar</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                </div>
                <div class="pure-u-1-3">
                    <div class="g-plus" data-action="share" data-annotation="bubble"></div>
                    <script type="text/javascript">
                      window.___gcfg = {lang: 'pt-BR'};

                      (function() {
                        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                        po.src = 'https://apis.google.com/js/plusone.js';
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                      })();
                    </script>
                </div>
            </div>
        </div>
        <div class="pure-u-1 menubar"  class="primary" data-step="5" data-intro="Aqui você pode baixar os estudos preliminares deste projeto.">
            <ul class="primary">
                <li><a href="<?php echo home_url()?>" class="active"><i class="icon-propose"></i> minuta participativa</a></li>
                <li><a href="./wp-content/uploads/2018/02/#"><i class="icon-propose "></i> Diagnóstico</a></li>
                <li><a href="<?php echo home_url().'/mapas'?>"><i class="icon-map"></i> Mapas</a></li>
                <li><a href="./wp-content/uploads/2018/02/#"><i class="icon-propose "></i> Quadros</a></li>
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