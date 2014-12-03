<?php
/**
 * Created by PhpStorm.
 * User: joffrey
 * Date: 18/11/14
 * Time: 20:23
 */

namespace App\Controller;


class PersonnesController extends AppController{


    public function index(){

        $personne = $this->Personnes->find('all'); // récupère toutes les données de la table
        $data = ['personne'=>$personne];
        $this->set($data);


    }


    public function  add(){



        $personne = $this->Personnes->newEntity($this->request->data);

        $localite = $this->Personnes->Localites->find('list', ['idField' => 'id_localite', 'valueField' => 't_nom'])->toArray();


        $respo = $this->Personnes->find('list', ['idField' => 'id_personne', 'valueField' => 't_nom'])->toArray();


        if ($this->request->is('post')){
            $personne->id_personne_responsable = serialize($personne->id_personne_responsable);
            var_dump($personne);
//            if ($this->Personnes->save($personne)){
//                $this->Flash->set('Votre événement a été sauvegardé.', ['element'=>'success']);
//                return $this->redirect(['action'=> 'view', $personne->id_personne]);
//            }
//            $this->Flash->error(__('Impossible d'ajouter votre événement.'));
        }
        $this->set(compact('personne', 'localite', 'respo'));

    }

//    public function view($id = null) {
//        if (!$id) {
//            throw new NotFoundException(__('Invalid article'));
//        }
//        $evenement = $this->Evenement->get($id, [
//            'contain' => ['localites']
//        ]);
//        $this->set(compact('evenement'));
//    }
//
//    public function edit($id = null) {
//
//
//        if (!$id) {
//            throw new NotFoundException(__('Invalid article'));
//        }
//
//        $evenement = $this->Evenement->get($id);
//        if ($this->request->is(['post', 'put'])) {
//            $this->Evenement->patchEntity($evenement, $this->request->data);
//            if ($this->Evenement->save($evenement)) {
//                $this->Flash->success(__('Votre événement a été mis à jour.'));
//                return $this->redirect(['action' => 'view', $evenement->id_evenement]);
//            }
//            $this->Flash->error(__('Impossible de mettre à jour votre événement.'));
//        }
//
//        $this->set('evenement', $evenement);
//    }
} 