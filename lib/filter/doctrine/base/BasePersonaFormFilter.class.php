<?php

/**
 * Persona filter form base class.
 *
 * @package    navtur
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePersonaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ap_paterno'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ap_materno'       => new sfWidgetFormFilterInput(),
      'ap_casada'        => new sfWidgetFormFilterInput(),
      'ci'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'expedido'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'direccion'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telefono'         => new sfWidgetFormFilterInput(),
      'celular'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fax'              => new sfWidgetFormFilterInput(),
      'casilla'          => new sfWidgetFormFilterInput(),
      'email'            => new sfWidgetFormFilterInput(),
      'fecha_nacimiento' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'is_active'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'foto'             => new sfWidgetFormFilterInput(),
      'created_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'nombre'           => new sfValidatorPass(array('required' => false)),
      'ap_paterno'       => new sfValidatorPass(array('required' => false)),
      'ap_materno'       => new sfValidatorPass(array('required' => false)),
      'ap_casada'        => new sfValidatorPass(array('required' => false)),
      'ci'               => new sfValidatorPass(array('required' => false)),
      'expedido'         => new sfValidatorPass(array('required' => false)),
      'direccion'        => new sfValidatorPass(array('required' => false)),
      'telefono'         => new sfValidatorPass(array('required' => false)),
      'celular'          => new sfValidatorPass(array('required' => false)),
      'fax'              => new sfValidatorPass(array('required' => false)),
      'casilla'          => new sfValidatorPass(array('required' => false)),
      'email'            => new sfValidatorPass(array('required' => false)),
      'fecha_nacimiento' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'is_active'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'foto'             => new sfValidatorPass(array('required' => false)),
      'created_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('persona_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Persona';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'nombre'           => 'Text',
      'ap_paterno'       => 'Text',
      'ap_materno'       => 'Text',
      'ap_casada'        => 'Text',
      'ci'               => 'Text',
      'expedido'         => 'Text',
      'direccion'        => 'Text',
      'telefono'         => 'Text',
      'celular'          => 'Text',
      'fax'              => 'Text',
      'casilla'          => 'Text',
      'email'            => 'Text',
      'fecha_nacimiento' => 'Date',
      'is_active'        => 'Boolean',
      'foto'             => 'Text',
      'created_at'       => 'Date',
      'updated_at'       => 'Date',
    );
  }
}
