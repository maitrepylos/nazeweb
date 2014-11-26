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

        $personne = $this->Personnes->find('all'); // récupere toutes les données de la table
        $data = ['personne'=>$personne];
        $this->set($data);


    }


    public function  add(){



        $evenement = $this->Evenement->newEntity($this->request->data);

        $localite = $this->Evenement->Localites->find('list', ['idField' => 'id_localite', 'valueField' => 't_nom'])->toArray();



        if ($this->request->is('post')){
            if ($this->Evenement->save($evenement)){
                $this->Flash->set('Votre évenement a été sauvegrardé.', ['element'=>'success']);
                return $this->redirect(['action'=> 'view', $evenement->id_evenement]);
            }
            $this->Flash->error(__('Impossible d ajouter votre évenement.'));
        }
        $this->set(compact('evenement', 'localite'));

    }

    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid article'));
        }
        $evenement = $this->Evenement->get($id, [
            'contain' => ['localites']
        ]);
        $this->set(compact('evenement'));
    }

    public function edit($id = null) {


        if (!$id) {
            throw new NotFoundException(__('Invalid article'));
        }

        $evenement = $this->Evenement->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Evenement->patchEntity($evenement, $this->request->data);
            if ($this->Evenement->save($evenement)) {
                $this->Flash->success(__('Votre evenement a été mis à jour.'));
                return $this->redirect(['action' => 'view', $evenement->id_evenement]);
            }
            $this->Flash->error(__('Impossible de mettre à jour votre evenement.'));
        }

        $this->set('evenement', $evenement);
    }
} 