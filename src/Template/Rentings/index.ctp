<div class="container">
    <div class="agileinfo_single">
        <h5><?= $product->title ?></h5>
        <div class="col-md-4 agileinfo_single_left">
            <?= $this->Html->image('upload/'.$product->image->path, ['class' => 'img-responsive', 'id' => 'example']) ?>
        </div>
        <div class="col-md-8 agileinfo_single_right">
            <div class="w3agile_description">
                <h4>Description :</h4>
                <p><?= $product->description ?></p>
            </div>
            <div class="snipcart-item block">
                <div class="snipcart-thumb agileinfo_single_right_snipcart">
                    <h4><?= $product->price ?> €</h4>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="rentings_list">
            <table class="table">
                <thead>
                <tr>
                    <th>Références</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                <?php foreach ($rentings as $renting){ ?>
                    <tr>
                        <td><?= $renting->reference ?></td>

                        <td>
                            <button type="button" class="btn btn-primary btn-sm btn-louer" data-toggle="modal" data-rentings_id = "<?= $renting->id ?>" data-target="#myModal">Louer</button>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <form action="<?= $this->Url->build([
                'controller' => 'Panier',
                'action' => 'add'
            ]) ?>" method="post">
            <input type="hidden" name="renting_id" value="">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Dates de location</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="datetimepicker_start">Date de début</label>
                    <input name="date_debut" id="datetimepicker_start" type="text" required >
                </div>
                <div class="form-group">
                    <label for="datetimepicker_end">Date de fin:</label>
                    <input name="date_fin" id="datetimepicker_end" type="text" required >
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-default" value="Louer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>
            </form>
        </div>

    </div>
</div>

<?php $this->start('script') ?>

<script>




    $('.btn-louer').on('click', function () {
        dates_disabled = ['2017/06/01', '2017/06/02', '2017/06/03', '2017/06/04', '2017/06/05'];
        jQuery('input[id=datetimepicker_start]').datetimepicker({
            format:'Y/m/d',
            disabledDates: dates_disabled,
            onShow:function( ct ){
                this.setOptions({
                    maxDate:jQuery('#datetimepicker_end').val()?jQuery('#datetimepicker_end').val():false
                })
            },
            timepicker:false
        });
        jQuery('input[id=datetimepicker_end]').datetimepicker({
            format:'Y/m/d',
            onShow:function( ct ){
                this.setOptions({
                    minDate:jQuery('#datetimepicker_start').val()?jQuery('#datetimepicker_start').val():false
                })
            },
            timepicker:false
        });
        id = $(this).data('rentings_id');
        $('input[name=renting_id]').val(id);
    });





</script>

<?php $this->end() ?>
