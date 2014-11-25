<?php
/**
 * Created by PhpStorm.
 * User: joffrey
 * Date: 19/11/14
 * Time: 20:20
 */

namespace App\Model\Table;


class ResponsableTable extends Table {


    public function initialize(array $config){

        $this->table('personnes');
        $this->primaryKey('id_personne');




    }


}