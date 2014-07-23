<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
    </head>
    <body>
        <div id="main">
            <header>
                <div id="logo">
                    <div id="logo_text">
                        <!-- class="logo_colour", allows you to change the colour of the text -->
                        <h1><a href="index.html">Navtur<span class="logo_colour"> - Bolivia</span></a></h1>
                        <h2>Viajes en buque para Bolivia</h2>
                    </div>
                </div>
                <nav>
                    <ul class="sf-menu" id="nav">
                        <li class="selected"><a href="index.html">Inicio</a></li>
<!--                        <li><a href="examples.html">Examples</a></li>
                        <li><a href="page.html">A Page</a></li>
                        <li><a href="another_page.html">Another Page</a></li>-->
                        <li><a href="#">Nosotros</a>
                            <ul>
                                <li><a href="#">Misión</a></li>
                                <li><a href="#">Visión</a></li>
                                <!--                                <li><a href="#">Drop Down Three</a></li>
                                <li><a href="#">Drop Down Four</a></li>
                                <li><a href="#">Drop Down Five</a></li>-->
                            </ul>
                        </li>
                       
                        <li><a href="contact.php">Servicios</a>
                            <ul>
                                <li><a href="#">Cruceros Sociales</a></li>  
                                <li><a href="#">Viajes</a>
                                    <ul>
                                        <li><a href="#">Semana Santa</a></li>
                                        <li><a href="#">Tiwanaku</a></li>
                                        <li><a href="#">Copacabana</a></li>
<!--                                        <li><a href="#">Sub Drop Down Four</a></li>
                                        <li><a href="#">Sub Drop Down Five</a></li>-->
                                    </ul>
                                </li>
                            </ul>    
                        </li>
                        <li><a href="contact.php">Contacto</a></li>
                    </ul>
                </nav>
            </header>
            
                <?php echo $sf_content ?>

            <footer>
                <p>Copyright &copy; TAKEOFF | <a href="http://localhost:8001/frontend_dev.php/home">Diseño realizado por la empresa TAKEOFF, Av. Iturralde esq. San Salvador # 1281, Telf. (591)- 2-2246103</a></p>      
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
