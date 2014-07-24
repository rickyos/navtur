<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('contactos/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('contactos/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'contactos/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['nombre']->renderLabel() ?></th>
        <td>
          <?php echo $form['nombre']->renderError() ?>
          <?php echo $form['nombre'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['ap_paterno']->renderLabel() ?></th>
        <td>
          <?php echo $form['ap_paterno']->renderError() ?>
          <?php echo $form['ap_paterno'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['ap_materno']->renderLabel() ?></th>
        <td>
          <?php echo $form['ap_materno']->renderError() ?>
          <?php echo $form['ap_materno'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['telefono']->renderLabel() ?></th>
        <td>
          <?php echo $form['telefono']->renderError() ?>
          <?php echo $form['telefono'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['email']->renderLabel() ?></th>
        <td>
          <?php echo $form['email']->renderError() ?>
          <?php echo $form['email'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['direccion']->renderLabel() ?></th>
        <td>
          <?php echo $form['direccion']->renderError() ?>
          <?php echo $form['direccion'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['empresa']->renderLabel() ?></th>
        <td>
          <?php echo $form['empresa']->renderError() ?>
          <?php echo $form['empresa'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
