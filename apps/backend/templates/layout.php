<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
      <title>
          <?php if (!include_slot('title')): ?>
                NAVTUR
          <?php endif ?>
      </title>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
    <body>
        <div id='menu-back'>
            <?php if($sf_user->isAuthenticated()==true):?>
            <div id="logo-back">
                <div id="logo_text">
                    <h1><?php echo link_to('Navtur', 'inicio/index')?><a><span class="logo_colour"> - Sistema Administrativo</span></a></h1>
                </div>
            </div>
            <div>
                <ul class="sf-menu" id="nav">
                    <li><?php echo link_to('Noticias', 'noticias/index')?></li>
                    <li><?php echo link_to('Contactos', 'contactos/index')?></li>
                    <li><a href="/frontend.php">Ir a la Página</a></li>
                </ul>
            </div>
            <div id='info_user_text'>
                <h6>Usuario: <?php echo $sf_user->getUsername(); ?></h6>
                <h6>Nombre: <?php echo $sf_user->getGuardUser()->getPersona();?></h6>
                <?php echo link_to('Salir','sfGuardAuth/Signout', array ('title'=>'Cerrar sesión')) ?>
            </div>
            <?php endif ?>                    
        </div>
        <div id="main">
            <?php echo $sf_content ?>
        </div>
            <footer id='footer-back'>
                <p id="footer-back-text">Powered by <a href="http://www.takeoff.com.bo/">TAKEOFF </a></p>      
            </footer>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#images').kwicks({
                    max: 600,
                    spacing: 2
                });
                $('ul.sf-menu').sooperfish();
            });
        </script>
    </body>
</html>