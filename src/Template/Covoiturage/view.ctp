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
    <?php //debug($value); ?>
    <tr>
      <td>
        <?= $this->Html->link($value['nom_evenement'], ['action' => 'view', $value['id_evenement']]) ?>
      </td>
      <td>
        <?php echo $value['prenom_conducteur'] . ' ' . $value['nom_conducteur'] ?>
      </td>
      <td>
        <?php echo $value['nbre_places'] ?>
      </td>
      <td>

        <?= $this->Html->link('Delete', ['action' => 'delete', '?' => ['id_evenement' => $value['id_evenement'], 'id_personne' => $value['id_personne']]], ['confirm' => 'Etes-vous sûr de vouloir supprimer ce covoiturage?']) ?>
        <?= $this->Html->link('Edit', ['action' => 'edit', '?' => ['id_evenement' => $value['id_evenement'], 'id_personne' => $value['id_personne']]]) ?>
      </td>
    </tr>
  <?php endforeach; ?>

</table>

