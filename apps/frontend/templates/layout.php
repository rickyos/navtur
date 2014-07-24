<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
        <title>
          <?php if (!include_slot('title')): ?>
                NAVTUR
          <?php endif ?>
      </title>
    </head>
    <body>
        <div id="main">
            <header>
                <div id="logo">
                    <div id="logo_text">
                        <h1><?php echo link_to('Navtur', 'home/index')?><a><span class="logo_colour"> - Bolivia</span></a></h1>
                        <h2>Viajes en buque para Bolivia</h2>
                    </div>
                </div>
                <nav>
                    <ul class="sf-menu" id="nav">
                        <li class="selected"><?php echo link_to('Inicio', 'home/index')?></li>
                        <li><a href=''>Nosotros</a>
                            <ul>
                                <li><?php echo link_to('Misión', 'home/mision') ?></li>
                                <li><?php echo link_to('Visión', 'home/vision') ?></li>
                            </ul>
                        </li>

                        <li><a href=''>Servicios</a>
                            <ul>
                                <li><?php echo link_to('Cruceros Sociales', 'home/crucerosSociales')?></li>  
                                <li><a href=''>Viajes</a>
                                    <ul>
                                        <li><?php echo link_to('Semana Santa','home/semanaSanta')?></li>
                                        <li><?php echo link_to('Tiwanaku','home/tiwanaku')?></li>
                                        <li><?php echo link_to('Copacabana','home/copacabana')?></li>
                                    </ul>
                                </li>
                            </ul>    
                        </li>
                        <li><?php echo link_to('Contacto', 'contactos/new')?></li>
                        <li><a href="/backend.php">Login</a></li>
                    </ul>
                </nav>
            </header>

            <?php echo $sf_content ?>

            <footer>
                <p>Powered by <a href="http://www.takeoff.com.bo/">TAKEOFF </a></p>      
            </footer>
        </div>
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
