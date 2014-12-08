<?php
/**
 * Created by PhpStorm.
 * User: joffrey
 * Date: 19/11/14
 * Time: 19:26
 */


namespace App\Model\Table;

use Cake\Datasource\ConnectionManager;
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

      $this->belongsToMany('evenement', [
        'through' => 'Covoiturage',
      ]);


    }

    public static function getNomPrenom(){
    $tab = array();
     $pdo = ConnectionManager::get('default');
      $sql = 'SELECT t_nom, t_prenom, id_personne FROM personnes';
      $r = $pdo->prepare($sql);
      $r->execute();
      $data = $r->fetchAll(\PDO::FETCH_ASSOC);

      foreach($data as $value){
        $tab[$value['id_personne']] = $value['t_nom'].' '.$value['t_prenom'];
      }
      return $tab;

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