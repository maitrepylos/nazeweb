<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 19/11/14
 * Time: 18:34
 */

namespace App\Controller;


class MainController extends AppController {

    public function index() {

        $evenement = TableRegistry::get('Evenement');
        $row = $evenement->find('all')->contain(['localites']);
        $data = ['evenement'=>$row];
        $this->set($data);
    }

}