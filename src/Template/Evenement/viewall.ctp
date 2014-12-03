
<<<<<<< HEAD
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
=======

<section>
    <div class="row">
        <?php foreach($evenement as $evenements){ ?>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="event" data-toggle="modal" data-target="#eventmodal<?php echo $evenements->id_evenement; ?>">
                    <h2><?php echo $evenements->t_nom; ?></h2>
                    <p><?php echo $evenements->t_description; ?></p>
                    <span><?php echo $evenements->d_date_debut; ?></span>
                    <span class="badge button">places libres: 3</span>
                </div>
            </div>
            <div class="modal fade" id="eventmodal<?php echo $evenements->id_evenement; ?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h2 class="modal-title"><?php echo  $evenements->t_nom; ?></h2>
                        </div>
                        <div class="modal-body">
                            <p><?php echo $evenements->t_description; ?></p>
                            <p><?php echo $evenements->t_rue; ?></p>
                            <span><?php echo $evenements->d_date_debut; ?></span>

                            <div id="submenu" class="button">
                                <?= $this->Html->link('Supprimer',['action' => 'delete', $evenements->id_evenement],['confirm' => 'Etes vous sur?']
                                    )
                                ?>
                                <?= $this->Html->link('Modifier' ,['action' => 'edit', $evenements->id_evenement]) ?>
                                <a href="#" class="">Proposer un covoiturage</a>
                                <a href="#" class="">S'inscrire à un covoiturage</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="event">
                <h2><?= $this->Html->link('Ajouter un événement', ['action' => '../evenement/add'], ['class' => ['glyphicon','glyphicon-plus','addevent']]) ?></h2>
            </div>
        </div>
    </div>
</section>
>>>>>>> origin/Olivier
