
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



echo '<h1>Personne</h1>';
echo $this->Form->create($personne);

echo $this->Form->input ('t_nom', ['label'=> 'Nom: ', 'style'=>'color:cornflowerblue;']);
echo $this->Form->input ('t_prenom', ['label'=> 'Prénom: ', 'style'=>'color:cornflowerblue;']);
echo $this->Form->input ('t_rue', ['label'=> 'Rue: ', 'style'=>'color:cornflowerblue;']);
echo $this->Form->input ('t_numero', ['label'=> 'Numéro: ', 'style'=>'color:cornflowerblue;']);
echo $this->Form->input ('t_tel', ['label'=> 'Numéro de téléphone: ', 'style'=>'color:cornflowerblue;']);
echo $this->Form->input ('t_gsm', ['label'=> 'Numéro de gsm: ', 'style'=>'color:cornflowerblue;']);
echo $this->Form->input ('t_email', ['label'=> 'Email: ', 'style'=>'color:cornflowerblue;']);
echo $this->Form->input('id_localite', ['label'=> 'Localité: ', 'options' => $localite]);
echo $this->Form->input('id_personne_responsable', ['label'=> 'Personne responsable: ', 'options' => $respo , 'multiple' => 'checkbox']);







echo $this->Form->submit (__("Ajouter une nouvel personne"));


echo $this->Form->end();
?>
