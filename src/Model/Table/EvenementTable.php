<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;


class EvenementTable extends Table {


    public function initialize(array $config){

        $this->table('evenement');
        $this->primaryKey('id_evenement');




        $this->belongsTo('localites', [
            'foreignKey' => 'localites_id_localite',
            'dependent' => true

        ]);


    }

    public function validationDefault(Validator $validator) {
        $validator
            ->allowEmpty('t_nom', false)
            ->allowEmpty('t_rue', false)
            ->allowEmpty('t_numero', false);

        return $validator;
    }
}



?>