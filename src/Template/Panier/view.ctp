<div class="container">
    <?php if ($liste !== false){ ?>
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
                <td><?php if ($promo !== false)echo 'Code promo' ?></td>
                <td><?php if ($promo !== false)echo $promo['code'] ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <?php
                    if ($promo !== false){
                        switch ($promo['type']){
                            case 0:
                                $totals = $totals - $promo['valeur'];
                                echo '- '.$promo['valeur'].' €';
                                break;
                            case 1:
                                $totals = $totals * (1-($promo['valeur']/100));
                                echo $promo['valeur'].'%';
                                break;
                            default:
                                echo $promo['valeur'];
                        }
                    }
                    ?>
                </td>
                <td><?= $totals ?> €</td>
                <td></td>
            </tr>
            </tfoot>
        </table>
        <form method="post">
            <input type="text" value="" name="promo" id="promo" placeholder="Code promo">
            <button type="submit" class="btn btn-primary btn-sm">
                Valider
            </button>
        </form>
        <form action="<?= $this->Url->build(['controller' => 'Panier', 'action' => 'creation']) ?>" method="post">
            <button type="submit" class="btn btn-primary btn-sm">
                Valider la commande
            </button>
        </form>

    <?php } else { ?>

        <p>Le panier est vide</p>

    <?php } ?>

</div>