
<h1>Evenement</h1>
<p><?= $this->Html->link('Ajouter un événement', ['action' => 'add']) ?></p>
<table>
    <tr>

        <th>Nom de l'événement:</th>
        <th>Localité:</th>
        <th>Actions:</th>
    </tr>

    <?php foreach ($evenement as $evenements): ?>
        <tr>

            <td>
                <?= $this->Html->link($evenements->t_nom, ['action' => 'view', $evenements->id_evenement]) ?>
            </td>
            <td>

                <?= $evenements->localite['t_nom'] ?>
            </td>
            <td>
                <?= $this->Form->postLink(
                    'Delete',
                    ['action' => 'delete', $evenements->id_evenement],
                    ['confirm' => 'Etes-vous sûr?'])
                ?>
                <?= $this->Html->link('Edit', ['action' => 'edit', $evenements->id_evenement]) ?>
            </td>
        </tr>
    <?php endforeach; ?>

</table>