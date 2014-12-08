<?php
/**
 * Created by PhpStorm.
 * User: Véronique
 * Date: 2/12/14
 * Time: 21:48
 */

namespace App\Controller;

use Cake\ORM\TableRegistry;

class CovoiturageController extends AppController
{

  public function index()
  {

  }

  public function  add()
  {
    $covoiturage = $this->Covoiturage->newEntity($this->request->data);
    $evenement = $this->Covoiturage->Evenement->find('list', ['idField' => 'id_evenement', 'valueField' => 't_nom'])->toArray();
    $personne = $this->Covoiturage->Personnes->find('list', ['idField' => 'id_personne', 'valueField' => 't_nom'])->toArray();
    if ($this->request->is('post')) {
      if ($this->Covoiturage->save($covoiturage)) {
        $this->Flash->set('Votre covoiturage a été sauvegardé.', ['element' => 'success']);
        return $this->redirect(['action' => 'viewall']);
      }
      $this->Flash->error(__('Impossible d\'ajouter votre covoiturage.'));
    }
    $this->set(compact('covoiturage', 'evenement', 'personne'));

  }

  public function view($id = null)
  {
    if (!$id) {
      throw new NotFoundException(__('Invalid article'));
    }
    $covoiturage = $this->Covoiturage->get($id);
    $this->set(compact('covoiturage'));
  }


  public function viewall(){

    $covoiturage = TableRegistry::get('Covoiturage');
    $row = $covoiturage->find('all');
    $data = ['covoiturage'=>$row];
    $this->set($data);

  }

  public function viewallvv(){
    $covoiturage = TableRegistry::get('Covoiturage');
    $query=$covoiturage->find();
    $query->select(['id_personne', 'id_evenement', 'n_nbre_places']);
    
    debug($query);


  }

  /*
      public function edit($id = null) {


          if (!$id) {
              throw new NotFoundException(__('Invalid article'));
          }

          $covoiturage = $this->Covoiturage->get($id);
          if ($this->request->is(['post', 'put'])) {
              $this->Covoiturage->patchEntity($covoiturage, $this->request->data);
              if ($this->Covoiturage->save($covoiturage)) {
                  $this->Flash->success(__('Votre covoiturage a été mis à jour.'));
                  return $this->redirect(['action' => 'view', $covoiturage->id_evenement]);
              }
              $this->Flash->error(__('Impossible de mettre à jour votre proposition de covoiturage.'));
          }

          $this->set('covoiturage', $covoiturage);
      }


      public function delete($id){
          $this->request->allowMethod(['post', 'delete']);

          $covoiturage  = $this->Covoiturage->get($id);
          if ($this->Covoiturage->delete($covoiturage)) {
              $this->Flash->success(__('Le covoiturage avec l\'id: 0 a été supprimé.', h($id)));
              return $this->redirect(['action' => 'index']);
          }
      }*/


} 