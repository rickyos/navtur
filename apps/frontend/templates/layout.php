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
                            <li class="active"><?php echo link_to('Inicio', 'home/index') ?></li>
                            <li><?php echo link_to('Acerca de Nosotros', 'home/acercaDe') ?></li>                    
                            <li><?php echo link_to('Contacto', 'contactos/new') ?></li>
                            <li><a href="/backend.php">Login</a></li>
                        </ul>
                    </div>
                    <div class="logo">
                        <h1><a href="index.html">NAV<span>TUR</span> <small>"Cruceros en el lago"</small></a></h1>
                    </div>
                    <div class="clr"></div>
                    <div class="slider">
                        <div id="coin-slider"> 
                            <img src="images/slide1.jpg" width="960" height="360" alt="" />
                            <img src="images/slide2.jpg" width="960" height="360" alt="" />
                            <img src="images/slide3.jpg" width="960" height="360" alt="" />
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
                                <li><?php echo link_to('Copacabana', 'home/copacabana') ?></li>
                                <li><?php echo link_to('Semana Santa', 'home/semanaSanta') ?></li>
                            </ul>
                        </div>
                        <div class="gadget">
                            <h2 class="star"><span>Auspiciadores</span></h2>
                            <div class="clr"></div>
                            <ul class="ex_menu">
                                <li><a href="#">Cocacola</a><br />
                                    Refrescante</li>
                                <li><a href="#">Pepsi</a><br />
                                    Deliciosa</li>

                            </ul>
                        </div>
                    </div>
                    <div class="clr"></div>
                </div>
            </div>
            <div class="fbg">
                <div class="fbg_resize">
                    <div class="col c1">
                        <h2><span>Servicios</span> Frecuentes</h2>
                        <p>Se realizan servicios de cruceros a diferentes lugares turísticos</p>
                        <ul class="fbg_ul">
                            <li><?php echo link_to('Tiwanaku', 'home/tiwanaku') ?></li>
                            <li><?php echo link_to('Copacabana', 'home/copacabana') ?></li>
                            <li><?php echo link_to('Semana Santa', 'home/semanaSanta') ?></li>
                        </ul>
                    </div>
                    <div class="col c3">
                        <h2><span>Contactanos</span></h2>
                        <p>Se realizan cruceros en La Paz - Bolivia.</p>
                        <p class="contact_info"> <span>Dirección:</span> Av. 16 de Julio No. 1490 (El Prado)<br />
                            <span>Telefono:</span> (+591)- 2312747<br />
                            <span>FAX:</span> (+591)- 2312747<br />
                            <span>Celular:</span> (+591)- 75240178 - 72018837<br />
                            <span>E-mail:</span> <a href="#">navturbolivia@hotmail.com</a> </p>
                    </div>
                    <div class="clr"></div>
                </div>
            </div>
        </div>
    </body>
    <div class="footer">
        <div class="footer_resize">
            <p class="lf">&copy; Copyright <a href="http://www.takeoff.com.bo">Takeoff</a>.</p>
            <div style="clear:both;"></div>
        </div>
    </div>
</html>