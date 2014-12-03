<h1>Covoiturage</h1>
<p><?= $this->Html->link('Ajouter un covoiturage', ['action' => 'add']) ?></p>
<table>
  <tr>

    <th>Nom de l'événement:</th>
    <th>Conducteur :</th>
    <th>Nombre de places :</th>
    <th></th>
  </tr>

  <?php foreach ($covoiturage as $value): ?>
    <?php //var_dump($value); ?>
    <tr>
      <td>
        <?php echo $value['id_personne'] ?>
      </td>
      <td>
        <?php echo $value['id_evenement'] ?>
      </td>
      <td>
        <?php echo $value['n_nbre_places'] ?>
      </td>
      <td>
        <?=
        $this->Form->postLink(
          'Delete',
          ['action' => 'delete'],
          ['confirm' => 'Êtes-vous sûr?'])
        ?>
        <!--DELETE FROM `app_lagaillarde`.`personnes_offre_covoiturage` WHERE `personnes_offre_covoiturage`.`id_personne` = 45 AND `personnes_offre_covoiturage`.`id_evenement` = 2-->
        <?= $this->Html->link('Edit', ['action' => 'edit']) ?>
      </td>
    </tr>
  <?php endforeach; ?>

</table>