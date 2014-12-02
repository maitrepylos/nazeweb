<?php
/**
 * Created by PhpStorm.
 * User: Véronique
 * Date: 2/12/14
 * Time: 21:51
 */

namespace App\Model\Table;

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
}

?>