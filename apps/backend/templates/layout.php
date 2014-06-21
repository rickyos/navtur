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
    <?php if($sf_user->isAuthenticated()==true):?>
    <?php echo link_to('Salir','sfGuardAuth/Signout', array ('title'=>'Cerrar sesión')) ?>
    <?php endif ?>
  </head>
  <body>
    <?php echo $sf_content ?>
  </body>
</html>
