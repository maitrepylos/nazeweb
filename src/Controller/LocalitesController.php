<?php
/**
 * Created by PhpStorm.
 * User: joffrey
 * Date: 5/11/14
 * Time: 19:44
 */

namespace App\Controller;


class LocalitesController extends AppController{

    public function index(){

        $localites = $this->Evenement->find('localites'); // récupere toutes les données de la table
        $data = ['localites'=>$localites];
        $this->set($data);
    }

}
