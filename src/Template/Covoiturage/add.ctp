<style>
  label {
    color: cornflowerblue;
  }

  input[type="submit"] {
    border: 1px solid cornflowerblue;
    border-radius: 5px;
    padding: 10px;
    background: cornflowerblue;
    color: white;
  !important

  }
</style>

<?php

echo '<h1>Offre de covoiturage</h1>';
echo $this->Form->create($covoiturage);
echo $this->Form->input('id_evenement', ['type' => 'select' , 'label' => 'Evènement : ', 'options' => $evenement]);
echo $this->Form->input('id_personne', ['type' => 'select' , 'label' => 'Conducteur : ', 'options' => $personne]);
echo $this->Form->input('d_date_depart', ['label' => 'Date prévue pour le covoiturage: ', 'style' => 'color:cornflowerblue;']);
echo $this->Form->input('d_heure_depart', ['label' => 'Heure du covoiturage: ', 'style' => 'color:cornflowerblue;']);
echo $this->Form->input('n_nbre_places', ['label' => 'Nombre de places: ', 'style' => 'color:cornflowerblue;']);
echo $this->Form->input('t_commentaire', ['label' => 'Commentaire: ', 'style' => 'color:cornflowerblue;']);


echo $this->Form->submit(__("Ajouter une proposition de covoiturage"));


echo $this->Form->end();
?>
<form>


</form>