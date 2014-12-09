
<section>
    <div class="row">
        <?php foreach($evenement as $evenements){ ?>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="event" data-toggle="modal" data-target="#eventmodal<?php echo $evenements->id_evenement; ?>">
                    <h2><?php echo $evenements->t_nom; ?></h2>
                    <p><?php echo $evenements->t_description; ?></p>
                    <p><?php echo $evenements->d_date_debut; ?></p>
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
                            <p><?php echo $evenements->d_date_debut; ?></p>
                            <p><a href="#">Afficher la liste des covoiturages</a></p>
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
            <?= $this->Html->link('Ajouter un événement', ['action' => '../evenement/add'], ['class' => ['event','addevent']]) ?>
        </div>
    </div>
</section>