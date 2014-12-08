<?php
/**
 * Created by PhpStorm.
 * User: Véronique
 * Date: 2/12/14
 * Time: 21:48
 */

namespace App\Controller;

use App\Model\Table\CovoiturageTable;
use App\Model\Table\PersonnesTable;
use Cake\ORM\TableRegistry;

class CovoiturageController extends AppController
{

  public function  add()
  {
    $covoiturage = $this->Covoiturage->newEntity($this->request->data);
    $evenements = $this->Covoiturage->Evenement->find('list', ['idField' => 'id_evenement', 'valueField' => 't_nom'])->toArray();
    $personnes = PersonnesTable::getNomPrenom();
    if ($this->request->is('post')) {
      if ($this->Covoiturage->save($covoiturage)) {
        $this->Flash->set('Votre covoiturage a été sauvegardé.', ['element' => 'success']);
        return $this->redirect(['action' => 'viewall']);
      }
      $this->Flash->error(__('Impossible d\'ajouter votre covoiturage.'));
    }
    $this->set(compact('covoiturage', 'evenements', 'personnes'));

  }

  public function view()
  {
    $rows = $this->Covoiturage->getCovoiturage();
    $data = ['covoiturage' => $rows];
    $this->set($data);
  }


  public function edit()
  {
    $evenement = $this->request->query('id_evenement');
    $conducteur = $this->request->query('id_personne');
    $covoiturage = $this->Covoiturage->newEntity($this->request->data);
    $offre_covoiturage=$this->Covoiturage->getCovoiturage($evenement,$conducteur);
    $evenements = $this->Covoiturage->Evenement->find('list', ['idField' => 'id_evenement', 'valueField' => 't_nom'])->toArray();
    $personnes = PersonnesTable::getNomPrenom();
    if ($this->request->is(['post', 'put'])) {
      $this->Covoiturage->patchEntity($covoiturage, $this->request->data);
      if ($this->Covoiturage->save($covoiturage)) {
        $this->Flash->success(__('Votre covoiturage a été mis à jour.'));
        return $this->redirect(['action' => 'view', $covoiturage->id_evenement]);
      }
      $this->Flash->error(__('Impossible de mettre à jour votre proposition de covoiturage.'));
    }
    $data = [
      'offre_covoiturage'=>$offre_covoiturage,
      'covoiturage' => $covoiturage,
      'evenements'=> $evenements,
      'personnes'=> $personnes,
    ];
    $this->set($data);
  }

  public function delete(){
    if(CovoiturageTable::deleteCovoiturage($this->request->query('id_evenement'),$this->request->query('id_personne'))){

      $this->Flash->success(__('Votre covoiturage a été supprimé.'));
      return $this->redirect(['action' => 'view']);

    }else{
      $this->Flash->error(__('Impossible de supprimer ce covoiturage'));
    }

  }
   /*public function delete($id_evenement,$id_personne){
       $this->request->allowMethod(['post', 'delete']);
        $evenement = $this->request->data('id_evenement');
        $conducteur = $this->request->data('id_personne');
        $offre_covoiturage=$this->Covoiturage->getCovoiturage($evenement,$conducteur);

            if ($this->Covoiturage->delete($id_evenement,$id_personne)) {
                $this->Flash->success(__('Le covoiturage avec l\'id: 0 a été supprimé.', h($id)));
                return $this->redirect(['action' => 'index']);
            }
        }*/

} 