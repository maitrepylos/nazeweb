<?php
/**
 * Created by PhpStorm.
 * User: joffrey
 * Date: 19/11/14
 * Time: 19:26
 */


namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;


class PersonnesTable extends Table {


    public function initialize(array $config){

        $this->table('personnes');
        $this->primaryKey('id_personne');


        $this->belongsTo('localites', [
            'foreignKey' => 'id_localite',
            'dependent' => true

        ]);




    }



//    public function validationDefault(Validator $validator) {
//        $validator
//            ->allowEmpty('t_nom', false)
//            ->allowEmpty('t_rue', false)
//            ->allowEmpty('t_numero', false);
//
//        return $validator;
//    }
}



?>