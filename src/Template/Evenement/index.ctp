
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

?>
<?= $this->Html->link('Ajouter un événement', ['action' => '../evenement/add']) ?>