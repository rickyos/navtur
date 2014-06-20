<?php

/**
 * Noticia form base class.
 *
 * @method Noticia getObject() Returns the current form's model object
 *
 * @package    navtur
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseNoticiaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'titulo'     => new sfWidgetFormInputText(),
      'cuerpo'     => new sfWidgetFormTextarea(),
      'imagen'     => new sfWidgetFormInputText(),
      'autor'      => new sfWidgetFormInputText(),
      'lugar'      => new sfWidgetFormInputText(),
      'fecha'      => new sfWidgetFormDate(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'titulo'     => new sfValidatorString(array('max_length' => 255)),
      'cuerpo'     => new sfValidatorString(array('max_length' => 10000)),
      'imagen'     => new sfValidatorString(array('max_length' => 255)),
      'autor'      => new sfValidatorString(array('max_length' => 255)),
      'lugar'      => new sfValidatorString(array('max_length' => 255)),
      'fecha'      => new sfValidatorDate(),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('noticia[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Noticia';
  }

}
