<?php if ($liste !== false){ ?>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th>Références</th>
                <th>Article</th>
                <th>Date début</th>
                <th>Date fin</th>
                <th>Jours</th>
                <th>Prix unité</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>


            <?php $totals = 0 ?>
            <?php foreach ($liste as $l) { ?>
                <tr>
                    <td>
                        <?= $l->reference ?>
                    </td>
                    <td>
                        <?= $l->product->title ?>
                    </td>
                    <td>
                        <?= $panier[$l->id]['date_debut'] ?>
                    </td>
                    <td>
                        <?= $panier[$l->id]['date_fin'] ?>
                    </td>
                    <td>
                        <?= $panier[$l->id]['days'] ?>
                    </td>
                    <td>
                        <?= $l->product->price ?> €
                    </td>
                    <td>
                        <?= $total = $l->product->price *$panier[$l->id]['days'] ?> €
                    </td>
                    <td>
                        <form method="post">
                            <input type="hidden" name="delete" value="<?= $l->id ?>">
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="glyphicon glyphicon-minus"></i> Supprimer
                            </button>
                        </form>
                    </td>
                </tr>
                <?php
                $totals = $totals + $total;
            }
            ?>
            </tbody>
            <tfoot>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><?= $totals ?> €</td>
                <td></td>
            </tr>
            </tfoot>
        </table>
        <form action="<?= $this->Url->build(['controller' => 'Panier', 'action' => 'creation']) ?>" method="post">
            <button type="submit" class="btn btn-primary btn-sm">
                Valider la commande
            </button>
        </form>
    </div>
<?php } else { ?>

    <p>Le panier est vide</p>

<?php }