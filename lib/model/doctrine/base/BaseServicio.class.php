<?php

/**
 * BaseServicio
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $nombre
 * @property string $pagina_web
 * @property Doctrine_Collection $Noticia
 * 
 * @method string              getNombre()     Returns the current record's "nombre" value
 * @method string              getPaginaWeb()  Returns the current record's "pagina_web" value
 * @method Doctrine_Collection getNoticia()    Returns the current record's "Noticia" collection
 * @method Servicio            setNombre()     Sets the current record's "nombre" value
 * @method Servicio            setPaginaWeb()  Sets the current record's "pagina_web" value
 * @method Servicio            setNoticia()    Sets the current record's "Noticia" collection
 * 
 * @package    navtur
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseServicio extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('servicio');
        $this->hasColumn('nombre', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('pagina_web', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Noticia', array(
             'local' => 'id',
             'foreign' => 'servicio_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}