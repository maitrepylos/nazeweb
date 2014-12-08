<style>

    p{
    color: cornflowerblue;
    }
    h1{
        color: cornflowerblue;
    }
    a{
        border: 1px solid cornflowerblue;
        border-radius: 5px;
        padding: 10px;
        background: cornflowerblue;
        color: white;!important

    }

</style>
<h1><?= h($evenement->t_nom) ?></h1>
<h3>Rue: </h3>
<p><?= h($evenement->t_rue) ?></p>
<h3>Numéro: </h3>
<p><?= h($evenement->t_numero) ?></p>
<h3>Localitée: </h3>
<p><?= h($evenement->localite['t_nom']) ?></p>
<h3>Date de début: </h3>
<p><?= h($evenement->d_date_debut) ?></p>
<h3>Date de fin: </h3>
<p><?= h($evenement->d_date_fin) ?></p>
<h3>Heure de début: </h3>
<p><?= h($evenement->d_heure_debut) ?></p>
<h3>Heure de fin: </h3>
<p><?= h($evenement->d_heure_fin) ?></p>
<h3>Decription: </h3>
<p><?= h($evenement->t_description) ?></p>

<?= $this->Form->postLink(
    'Supprimer',
    ['action' => 'delete', $evenement->id_evenement],
    ['confirm' => 'Êtes-vous sûr?'])
?>
<br><br>
<?= $this->Html->link('Modifier', ['action' => 'edit', $evenement->id_evenement]) ?>



