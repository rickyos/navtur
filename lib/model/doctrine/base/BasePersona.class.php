<?php

/**
 * BasePersona
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $user_id
 * @property string $nombre
 * @property string $ap_paterno
 * @property string $ap_materno
 * @property string $ap_casada
 * @property string $ci
 * @property string $expedido
 * @property string $direccion
 * @property string $telefono
 * @property string $celular
 * @property string $fax
 * @property string $casilla
 * @property string $email
 * @property date $fecha_nacimiento
 * @property boolean $is_active
 * @property string $foto
 * @property sfGuardUser $sfGuardUser
 * 
 * @method integer     getUserId()           Returns the current record's "user_id" value
 * @method string      getNombre()           Returns the current record's "nombre" value
 * @method string      getApPaterno()        Returns the current record's "ap_paterno" value
 * @method string      getApMaterno()        Returns the current record's "ap_materno" value
 * @method string      getApCasada()         Returns the current record's "ap_casada" value
 * @method string      getCi()               Returns the current record's "ci" value
 * @method string      getExpedido()         Returns the current record's "expedido" value
 * @method string      getDireccion()        Returns the current record's "direccion" value
 * @method string      getTelefono()         Returns the current record's "telefono" value
 * @method string      getCelular()          Returns the current record's "celular" value
 * @method string      getFax()              Returns the current record's "fax" value
 * @method string      getCasilla()          Returns the current record's "casilla" value
 * @method string      getEmail()            Returns the current record's "email" value
 * @method date        getFechaNacimiento()  Returns the current record's "fecha_nacimiento" value
 * @method boolean     getIsActive()         Returns the current record's "is_active" value
 * @method string      getFoto()             Returns the current record's "foto" value
 * @method sfGuardUser getSfGuardUser()      Returns the current record's "sfGuardUser" value
 * @method Persona     setUserId()           Sets the current record's "user_id" value
 * @method Persona     setNombre()           Sets the current record's "nombre" value
 * @method Persona     setApPaterno()        Sets the current record's "ap_paterno" value
 * @method Persona     setApMaterno()        Sets the current record's "ap_materno" value
 * @method Persona     setApCasada()         Sets the current record's "ap_casada" value
 * @method Persona     setCi()               Sets the current record's "ci" value
 * @method Persona     setExpedido()         Sets the current record's "expedido" value
 * @method Persona     setDireccion()        Sets the current record's "direccion" value
 * @method Persona     setTelefono()         Sets the current record's "telefono" value
 * @method Persona     setCelular()          Sets the current record's "celular" value
 * @method Persona     setFax()              Sets the current record's "fax" value
 * @method Persona     setCasilla()          Sets the current record's "casilla" value
 * @method Persona     setEmail()            Sets the current record's "email" value
 * @method Persona     setFechaNacimiento()  Sets the current record's "fecha_nacimiento" value
 * @method Persona     setIsActive()         Sets the current record's "is_active" value
 * @method Persona     setFoto()             Sets the current record's "foto" value
 * @method Persona     setSfGuardUser()      Sets the current record's "sfGuardUser" value
 * 
 * @package    navtur
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePersona extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('persona');
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('nombre', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 50,
             ));
        $this->hasColumn('ap_paterno', 'string', 30, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 30,
             ));
        $this->hasColumn('ap_materno', 'string', 30, array(
             'type' => 'string',
             'length' => 30,
             ));
        $this->hasColumn('ap_casada', 'string', 30, array(
             'type' => 'string',
             'length' => 30,
             ));
        $this->hasColumn('ci', 'string', 14, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 14,
             ));
        $this->hasColumn('expedido', 'string', 2, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 2,
             ));
        $this->hasColumn('direccion', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('telefono', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             ));
        $this->hasColumn('celular', 'string', 20, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 20,
             ));
        $this->hasColumn('fax', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             ));
        $this->hasColumn('casilla', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             ));
        $this->hasColumn('email', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('fecha_nacimiento', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('is_active', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => true,
             ));
        $this->hasColumn('foto', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('sfGuardUser', array(
             'local' => 'user_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}