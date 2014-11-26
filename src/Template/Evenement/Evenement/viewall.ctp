
<h1>Evenement</h1>
<p><?= $this->Html->link('Ajouter un évenement', ['action' => 'add']) ?></p>
<table>
    <tr>

        <th>Nom de l'évenement:</th>
        <th>Localité:</th>
        <th>Actions:</th>
    </tr>

    <!-- C'est ici que nous itérons à travers notre objet query $articles, -->
    <!-- en affichant les informations de l'article -->

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
                    ['confirm' => 'Etes vous sur?'])
                ?>
                <?= $this->Html->link('Edit', ['action' => 'edit', $evenements->id_evenement]) ?>
            </td>
        </tr>
    <?php endforeach; ?>

</table>