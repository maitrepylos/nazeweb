
<style>
    label{
        color: GrayText;
    }
</style>
<?php
echo '<h1>Evenement</h1>';
echo $this->Form->create();
echo $this->Form->input ('t_nom', ['label'=> 'Nom: ', 'style'=>'color:red;']);
echo $this->Form->input ('t_rue', ['label'=> 'Rue: ', 'style'=>'color:red;']);
echo $this->Form->input ('t_numero', ['label'=> 'Numéro: ', 'style'=>'color:red;']);
echo $this->Form->input ('d_date_debut', ['label'=> 'Date début: ', 'style'=>'color:red;']);
echo $this->Form->input ('d_heure_debut', ['label'=> 'Heure début: ', 'style'=>'color:red;']);
echo $this->Form->input ('d_date_fin', ['label'=> 'Date fin: ', 'style'=>'color:red;']);
echo $this->Form->input ('d_heure_fin', ['label'=> 'Heure fin: ', 'style'=>'color:red;']);
echo $this->Form->input ('t_description', ['label'=> 'Description: ', 'style'=>'color:red;']);
echo $this->Form->submit (__("Ajouter"));


echo $this->Form->submit (__("Ajouter"));
echo $this->Form->end();
?>
