﻿
<style>
    label{
        color: cornflowerblue;
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


echo '<h1>Evenement</h1>';
echo $this->Form->create($evenement);

echo $this->Form->input ('t_nom', ['label'=> 'Nom: ', 'style'=>'color:cornflowerblue;']);
echo $this->Form->input ('t_rue', ['label'=> 'Rue: ', 'style'=>'color:cornflowerblue;']);
echo $this->Form->input ('t_numero', ['label'=> 'Numéro: ', 'style'=>'color:cornflowerblue;']);
echo $this->Form->input('localites_id_localite', ['label'=> 'Localité: ', 'options' => $localite]);



echo $this->Form->input ('d_date_debut', ['label'=> 'Date début: ','style'=>'color:cornflowerblue;']);
echo $this->Form->input ('d_heure_debut', ['label'=> 'Heure début: ', 'style'=>'color:cornflowerblue;']);
echo $this->Form->input ('d_date_fin', ['label'=> 'Date fin: ', 'style'=>'color:cornflowerblue;']);
echo $this->Form->input ('d_heure_fin', ['label'=> 'Heure fin: ', 'style'=>'color:cornflowerblue;']);
echo $this->Form->input ('t_description', ['label'=> 'Description: ', 'style'=>'color:cornflowerblue;']);
echo $this->Form->submit (__("Ajouter un nouvel évenement"));


echo $this->Form->end();
?>
<form>

    <input claas
</form>