<?php
/**
 * Created by PhpStorm.
 * User: Véronique
 * Date: 2/12/14
 * Time: 21:51
 */

namespace App\Model\Table;

use Cake\Datasource\ConnectionManager;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class CovoiturageTable extends Table
{

  public function initialize(array $config)
  {
    $this->table('personnes_offre_covoiturage');
    $this->belongsTo('evenement');
    $this->belongsTo('personnes');
  }

  //Fonction pour récupérer tous les enregistrements ou un enregistrement donné de la table 'Covoiturage'

  public static function getCovoiturage($evenement = null, $conducteur = null)
  {
    $conn = ConnectionManager::get('default');

      $r = $conn->prepare('SELECT p.id_personne as id_personne, p.t_nom as nom_conducteur, p.t_prenom as prenom_conducteur, e.t_nom as nom_evenement, e.id_evenement as id_evenement, poc.n_nbre_places as nbre_places, poc.d_date_depart as date_depart, poc.d_heure_depart as heure_depart, poc.t_commentaire as commentaire FROM personnes p JOIN personnes_offre_covoiturage poc ON p.id_personne=poc.id_personne JOIN evenement e ON poc.id_evenement=e.id_evenement');
      $r->execute();

    $rows = $r->fetchAll('assoc');
    return $rows;
  }

  //Fonction pour supprimer un enregistrement donné de la table 'Covoiturage'

  public static function deleteCovoiturage($evenement = null, $conducteur = null)
  {
    $pdo = ConnectionManager::get('default');
    if ($evenement != null && $conducteur != null) {
      $r = $pdo->prepare('DELETE FROM personnes_offre_covoiturage WHERE id_evenement=? AND id_personne=?');
      $r->execute(array($evenement, $conducteur));
      return true;

    }
    return false;
  }


}

?>