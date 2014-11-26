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
echo '<h1>Bienvenue sur la page des évenements !</h1>';

?>
<?= $this->Html->link('Ajouté un évenement', ['action' => '../evenement/add']) ?>