<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
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
        <div class="main">
            <div class="header">
                <div class="header_resize">
                    <div class="menu_nav">
                        <ul>
                            <li><?php echo link_to('Inicio', 'home/index') ?></li>
                            <li><?php echo link_to('Acerca de Nosotros', 'home/acercaDe') ?></li>                    
                            <li><?php echo link_to('Cruceros', 'home/cruceros') ?></li>
                            <li><?php echo link_to('Contacto', 'contactos/new') ?></li>
                            <li><a href="/backend.php">Login</a></li>
                        </ul>
                    </div>
                    <div class="logo">
                        <h1><a href="/frontend.php"><img src="/images/logonav.jpg" width="250" height="100" alt=""/></a></h1>
                    </div>
                    <div class="clr"></div>
                    <div class="slider">
                        <div id="coin-slider"> 
                                <img src="/images/nt19.jpg" />
                                <img src="/images/nt17.jpg" />
                                <img src="/images/nt18.jpg" />
                                <img src="/images/nt21.jpg" />
                                <img src="/images/nt24.jpg" />
                                <img src="/images/nt28.jpg" />
                                <img src="/images/nt33.jpg" />
                                <img src="/images/nt37.jpg" />
                                <img src="/images/nt13.jpg" />
                                <img src="/images/nt41.jpg" />                          
                        </div>
                        <div class="clr"></div>
                    </div>
                    <div class="clr"></div>
                </div>
            </div>
            <div class="content">

                <div class="content_resize">
                    <div class="mainbar">
                        <?php echo $sf_content ?>
                    </div>
                    <div class="sidebar">
                        <div class="gadget">
                            <h2 class="star"><span>Servicios Frecuentes</span></h2>
                            <div class="clr"></div>
                            <ul class="sb_menu">
                                <li><?php echo link_to('Cruceros Sociales', 'home/crucerosSociales') ?></li>
                                <li><?php echo link_to('Cruceros Corporativos', 'home/crucerosCorporativos') ?></li>
                                <li><?php echo link_to('Cruceros Ferroviario Lacustre', 'home/cruceroFerroviarioLac') ?></li>
                                <li><?php echo link_to('Cruceros Educativos (Solo Buque)', 'home/cruceroEducativo') ?></li>
                                <li><?php echo link_to('Cruceros Educativos (Todo Incluido)', 'home/cruceroEducativoTodo') ?></li>
                                <li><?php echo link_to('Cruceros de Confraternidad (Solo Buque)', 'home/cruceroConfraternidad') ?></li>
                                <li><?php echo link_to('Cruceros de Confraternidad (Todo Incluido)', 'home/cruceroConfraternidadTodo') ?></li>
                                <li><?php echo link_to('Cruceros de Semana Santa', 'home/semanaSanta') ?></li>
                                <li><?php echo link_to('Cruceros de Año Nuevo', 'home/anoNuevo') ?></li>
                                <li><?php echo link_to('Cruceros para Papá', 'home/cruceroPapa') ?></li>
                                <li><?php echo link_to('Cruceros para Mamá', 'home/cruceroMama') ?></li>


                            </ul>
                        </div>       
                    </div>
                    <div class="clr"></div>
                </div>
            </div>
            <div class="fbg">
                <div class="fbg_resize">
                    <h2><span>Contáctanos </span></h2>
                    <div class="col c2">
                        <h3><span>Agencia Regional</span></h3>
                        <p class="contact_info"> <span>Dirección:</span> Av. 16 de Julio No. 1490 (El Prado)<br />
                            <span>Telefono:</span> (+591)- 2312747<br />
                            <span>FAX:</span> (+591)- 2312747<br />
                            <span>Celular:</span> (+591)- 75240178 - 72018837<br />
                            <span>E-mail:</span> <a href="#"> reservas_navtur@hotmail.com</a> </p>
                    </div>
                    <div class="col c3">
                        <h3><span>Agencia Comercial</span></h3>
                        <p class="contact_info"> <span>Dirección:</span> Comando General de la Armada Boliviana Portalón Principal de Guardia Av. Michel (Bajo Seguencoma)<br />
                            <span>Celular:</span> (+591)- 72018837 - 72065246 <br />
                            <span>E-mail:</span> <a href="#"> agenciaregional_navtur@hotmail.com</a> </p>
                    </div>
                    <div class="clr"></div>
                </div>
            </div>
        </div>
    </body>
    <div class="footer">
        <div class="footer_resize">
            <p class="lf">Powered By <a href="http://www.takeoff.com.bo">Takeoff</a>.</p>
            <div style="clear:both;"></div>
        </div>
</html>
