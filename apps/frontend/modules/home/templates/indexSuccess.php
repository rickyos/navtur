<?php foreach ($noticias as $noticia): ?>
<div class="article">
    <h2><?php echo $noticia->getTitulo();?></h2>
    <p class="infopost">Publicado por <?php echo $noticia->getAutor(); ?><span class="date">&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo $noticia->getLugar();?>, <?php echo $noticia->getFecha();?></span></p>
    <div class="clr"></div>
    <div class="img"><img src=<?php echo $noticia->getImagen();?> width="200" height="210" alt="" class="fl" /></div>
    <div class="post_content">
        <p id='noti-cuerpo'><?php echo $noticia->getCuerpo(); ?></p>
        <p class="spec"><a href="#" class="rm">Read more</a></p>
    </div>
    <div class="clr"></div>
</div>
<?php endforeach; ?>
