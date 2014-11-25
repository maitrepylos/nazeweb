<?php
/**
 * Created by PhpStorm.
 * User: joffrey
 * Date: 5/11/14
 * Time: 19:18
 */

namespace App\Model\Table;
use Cake\ORM\Table;

class LocalitesTable extends Table{

    public function initialize(array $config){

        $this->table('localites');
        $this->primaryKey('id_localite');
        $this->hasMany('evenement', [
            'foreignKey' => 'localites_id_localite',
            'dependent' => true

        ]);

        $this->table('localites');
        $this->primaryKey('id_localite');
        $this->hasMany('personnes', [
            'foreignKey' => 'id_localite',
            'dependent' => true

        ]);
    }



}


