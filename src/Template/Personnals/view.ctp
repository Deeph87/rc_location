<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <table class="table">
            <thead>
                <tr>
                    <th>Référence</th>
                    <th>Produit</th>
                    <th>Nbr de jours</th>
                    <th>Date de début</th>
                    <th>Date de fin</th>
                    <th>Coût</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $total_price = 0;
                $total_price_promo = 0;
                if(!empty($details_invoices_per_renter)) {
                    foreach ($details_invoices_per_renter as $detail) {

                        ?>
                            <tr>
                                <th><?php echo $detail['_matchingData']['Rentings']->reference ?></th>
                                <td><?php echo $detail['_matchingData']['Products']->title ?></td>
                                <td><?php echo $detail->day_range ?></td>
                                <td><?php echo $detail->date_start ?></td>
                                <td><?php echo $detail->date_end ?></td>
                                <td><?php echo $detail->price.' €' ?></td>
                                <td><?php echo $result = $detail['_matchingData']['Rentings']->status == 0 ? '<span class="label label-danger">Terminé</span>' : '<span class="label label-success">En cours</span>' ?></td>
                            </tr>
                        <?php
//                        debug($detail);
                        $total_price += $detail->price;
                    }
                }
            ?>
            </tbody>
            <tfoot>
            <tr>
                <th>TOTAL</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <th><?php echo $total_price.' €'; ?></th>
            </tr>
            <tr>
                <th>TOTAL AVEC PROMO</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <th>
                    <?php
                        foreach ($invoice_per_renter as $invoice){
                            echo $invoice->sum.' €';
                        }
                    ?>
                </th>
            </tr>
            </tfoot>
        </table>
    </div>
    <div class="col-md-1"></div>
</div>