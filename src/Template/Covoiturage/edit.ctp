<style>
    label{
        color: GrayText;
    }


    input[type="submit"] {
        border: 1px solid cornflowerblue;
        border-radius: 5px;
        padding: 10px;
        background: cornflowerblue;
        color: white;!important

    }
</style>

<?php
echo '<h1>Covoiturage - Modification</h1>';
//debug($offre_covoiturage);
echo $this->Form->create($covoiturage);
echo $this->Form->label('Evenement');
echo $this->Form->select('id_evenement', $evenements, ['default'=>$offre_covoiturage[0]['id_evenement']]);
echo $this->Form->label('Conducteur : ');
echo $this->Form->select('id_personne', $personnes, ['default' => $offre_covoiturage[0]['id_personne']]);
echo $this->Form->input('d_date_depart', ['type' => 'date' , 'label' => 'Date prévue pour le covoiturage: ', 'default' => $offre_covoiturage[0]['date_depart'], 'style' => 'color:cornflowerblue;']);
echo $this->Form->input('d_heure_depart', ['label' => 'Heure du covoiturage: ', 'default' => $offre_covoiturage[0]['heure_depart'], 'style' => 'color:cornflowerblue;']);
echo $this->Form->input('n_nbre_places', ['label' => 'Nombre de places: ', 'default' => $offre_covoiturage[0]['nbre_places'], 'style' => 'color:cornflowerblue;']);
echo $this->Form->input('t_commentaire', ['label' => 'Commentaire: ', 'default' => $offre_covoiturage[0]['commentaire'], 'style' => 'color:cornflowerblue;']);
echo $this->Form->submit(__("Appliquer la modification"));
echo $this->Form->end();
?>

