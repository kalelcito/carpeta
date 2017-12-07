<?php

/**
 * Baseseccion11
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 *
 * @property integer $id_ps
 * @property integer $id_comite
 * @property integer $id_seccion
 * @property integer $id_usuario
 * @property boolean $min_a1
 * @property boolean $min_b1
 * @property boolean $min_c1
 * @property boolean $min_d1
 * @property boolean $min_e1
 * @property boolean $min_a2
 * @property boolean $min_a3
 * @property boolean $min_a4
 * @property boolean $min_a5
 * @property boolean $min_b5
 * @property boolean $min_c5
 * @property boolean $min_d5
 * @property boolean $min_e5
 * @property boolean $min_f5
 * @property boolean $min_g5
 * @property boolean $min_a6
 * @property boolean $min_b6
 * @property boolean $min_c6
 * @property boolean $min_a7
 * @property boolean $min_b7
 * @property boolean $min_a8
 * @property boolean $min_b8
 * @property boolean $min_a9
 * @property boolean $min_b9
 * @property boolean $min_c9
 * @property boolean $min_d9
 * @property boolean $min_e9
 * @property boolean $min_a10
 * @property boolean $min_a11
 * @property boolean $min_a16
 * @property boolean $min_a17
 * @property boolean $min_b17
 * @property boolean $min_a19
 * @property boolean $min_a24
 * @property boolean $min_a25
 * @property boolean $min_b25
 * @property date $fecha
 * @property comite $Comite
 *
 * @method integer   getIdPs()           Returns the current record's "id_ps" value
 * @method integer   getIdComite()       Returns the current record's "id_comite" value
 * @method integer   getIdSeccion()      Returns the current record's "id_seccion" value
 * @method integer   getIdUsuario()      Returns the current record's "id_usuario" value
 * @method boolean   getMinA1()          Returns the current record's "min_a1" value
 * @method boolean   getMinB1()          Returns the current record's "min_b1" value
 * @method boolean   getMinC1()          Returns the current record's "min_c1" value
 * @method boolean   getMinD1()          Returns the current record's "min_d1" value
 * @method boolean   getMinE1()          Returns the current record's "min_e1" value
 * @method boolean   getMinA2()          Returns the current record's "min_a2" value
 * @method boolean   getMinA3()          Returns the current record's "min_a3" value
 * @method boolean   getMinA4()          Returns the current record's "min_a4" value
 * @method boolean   getMinA5()          Returns the current record's "min_a5" value
 * @method boolean   getMinB5()          Returns the current record's "min_b5" value
 * @method boolean   getMinC5()          Returns the current record's "min_c5" value
 * @method boolean   getMinD5()          Returns the current record's "min_d5" value
 * @method boolean   getMinE5()          Returns the current record's "min_e5" value
 * @method boolean   getMinF5()          Returns the current record's "min_f5" value
 * @method boolean   getMinG5()          Returns the current record's "min_g5" value
 * @method boolean   getMinA6()          Returns the current record's "min_a6" value
 * @method boolean   getMinB6()          Returns the current record's "min_b6" value
 * @method boolean   getMinC6()          Returns the current record's "min_c6" value
 * @method boolean   getMinA7()          Returns the current record's "min_a7" value
 * @method boolean   getMinB7()          Returns the current record's "min_b7" value
 * @method boolean   getMinA8()          Returns the current record's "min_a8" value
 * @method boolean   getMinB8()          Returns the current record's "min_b8" value
 * @method boolean   getMinA9()          Returns the current record's "min_a9" value
 * @method boolean   getMinB9()          Returns the current record's "min_b9" value
 * @method boolean   getMinC9()          Returns the current record's "min_c9" value
 * @method boolean   getMinD9()          Returns the current record's "min_d9" value
 * @method boolean   getMinE9()          Returns the current record's "min_e9" value
 * @method boolean   getMinA10()         Returns the current record's "min_a10" value
 * @method boolean   getMinA11()         Returns the current record's "min_a11" value
 * @method boolean   getMinA16()         Returns the current record's "min_a16" value
 * @method boolean   getMinA17()         Returns the current record's "min_a17" value
 * @method boolean   getMinB17()         Returns the current record's "min_b17" value
 * @method boolean   getMinA19()         Returns the current record's "min_a19" value
 * @method boolean   getMinA24()         Returns the current record's "min_a24" value
 * @method boolean   getMinA25()         Returns the current record's "min_a25" value
 * @method boolean   getMinB25()         Returns the current record's "min_b25" value
 * @method date      getFecha()          Returns the current record's "fecha" value
 * @method comite    getComite()         Returns the current record's "Comite" value
 * @method seccion11 setIdPs()           Sets the current record's "id_ps" value
 * @method seccion11 setIdComite()       Sets the current record's "id_comite" value
 * @method seccion11 setIdSeccion()      Sets the current record's "id_seccion" value
 * @method seccion11 setIdUsuario()      Sets the current record's "id_usuario" value
 * @method seccion11 setMinA1()          Sets the current record's "min_a1" value
 * @method seccion11 setMinB1()          Sets the current record's "min_b1" value
 * @method seccion11 setMinC1()          Sets the current record's "min_c1" value
 * @method seccion11 setMinD1()          Sets the current record's "min_d1" value
 * @method seccion11 setMinE1()          Sets the current record's "min_e1" value
 * @method seccion11 setMinA2()          Sets the current record's "min_a2" value
 * @method seccion11 setMinA3()          Sets the current record's "min_a3" value
 * @method seccion11 setMinA4()          Sets the current record's "min_a4" value
 * @method seccion11 setMinA5()          Sets the current record's "min_a5" value
 * @method seccion11 setMinB5()          Sets the current record's "min_b5" value
 * @method seccion11 setMinC5()          Sets the current record's "min_c5" value
 * @method seccion11 setMinD5()          Sets the current record's "min_d5" value
 * @method seccion11 setMinE5()          Sets the current record's "min_e5" value
 * @method seccion11 setMinF5()          Sets the current record's "min_f5" value
 * @method seccion11 setMinG5()          Sets the current record's "min_g5" value
 * @method seccion11 setMinA6()          Sets the current record's "min_a6" value
 * @method seccion11 setMinB6()          Sets the current record's "min_b6" value
 * @method seccion11 setMinC6()          Sets the current record's "min_c6" value
 * @method seccion11 setMinA7()          Sets the current record's "min_a7" value
 * @method seccion11 setMinB7()          Sets the current record's "min_b7" value
 * @method seccion11 setMinA8()          Sets the current record's "min_a8" value
 * @method seccion11 setMinB8()          Sets the current record's "min_b8" value
 * @method seccion11 setMinA9()          Sets the current record's "min_a9" value
 * @method seccion11 setMinB9()          Sets the current record's "min_b9" value
 * @method seccion11 setMinC9()          Sets the current record's "min_c9" value
 * @method seccion11 setMinD9()          Sets the current record's "min_d9" value
 * @method seccion11 setMinE9()          Sets the current record's "min_e9" value
 * @method seccion11 setMinA10()         Sets the current record's "min_a10" value
 * @method seccion11 setMinA11()         Sets the current record's "min_a11" value
 * @method seccion11 setMinA16()         Sets the current record's "min_a16" value
 * @method seccion11 setMinA17()         Sets the current record's "min_a17" value
 * @method seccion11 setMinB17()         Sets the current record's "min_b17" value
 * @method seccion11 setMinA19()         Sets the current record's "min_a19" value
 * @method seccion11 setMinA24()         Sets the current record's "min_a24" value
 * @method seccion11 setMinA25()         Sets the current record's "min_a25" value
 * @method seccion11 setMinB25()         Sets the current record's "min_b25" value
 * @method seccion11 setFecha()          Sets the current record's "fecha" value
 * @method seccion11 setComite()         Sets the current record's "Comite" value
 *
 * @package    carpetavirtual
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Baseseccion11 extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('seccion11');
        $this->hasColumn('id_ps', 'integer', 11, array(
            'primary' => true,
            'type' => 'integer',
            'autoincrement' => true,
            'length' => 11,
        ));
        $this->hasColumn('id_comite', 'integer', 11, array(
            'type' => 'integer',
            'length' => 11,
        ));
        $this->hasColumn('id_seccion', 'integer', 11, array(
            'type' => 'integer',
            'length' => 11,
        ));
        $this->hasColumn('id_usuario', 'integer', 11, array(
            'type' => 'integer',
            'length' => 11,
        ));
        $this->hasColumn('min_a1', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_b1', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_c1', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_d1', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_e1', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_a2', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_a3', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_a4', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_a5', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_b5', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_c5', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_d5', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_e5', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_f5', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_g5', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_a6', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_b6', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_c6', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_a7', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_b7', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_a8', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_b8', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_a9', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_b9', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_c9', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_d9', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_e9', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_a10', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_a11', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_a16', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_a17', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_b17', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_a19', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_a24', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_a25', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('min_b25', 'boolean', null, array(
            'default' => 0,
            'type' => 'boolean',
        ));
        $this->hasColumn('fecha', 'date', null, array(
            'type' => 'date',
        ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('comite as Comite', array(
            'local' => 'id_comite',
            'foreign' => 'id_comite',
            'onDelete' => 'CASCADE'));
    }
}