<?php

/**
 * Noticia filter form base class.
 *
 * @package    navtur
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseNoticiaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'titulo'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cuerpo'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'imagen'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'autor'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'lugar'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'servicio_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Servicio'), 'add_empty' => true)),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'titulo'      => new sfValidatorPass(array('required' => false)),
      'cuerpo'      => new sfValidatorPass(array('required' => false)),
      'imagen'      => new sfValidatorPass(array('required' => false)),
      'autor'       => new sfValidatorPass(array('required' => false)),
      'lugar'       => new sfValidatorPass(array('required' => false)),
      'fecha'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'servicio_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Servicio'), 'column' => 'id')),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('noticia_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Noticia';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'titulo'      => 'Text',
      'cuerpo'      => 'Text',
      'imagen'      => 'Text',
      'autor'       => 'Text',
      'lugar'       => 'Text',
      'fecha'       => 'Date',
      'servicio_id' => 'ForeignKey',
      'created_at'  => 'Date',
      'updated_at'  => 'Date',
    );
  }
}
