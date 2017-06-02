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
                        <td><button class="button">Louer</button></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<input id="datetimepicker_start" type="text" >
<input id="datetimepicker_end" type="text" >
<?php $this->start('script') ?>

<script>

    dates_disabled = ['2017/06/01', '2017/06/02', '2017/06/03', '2017/06/04', '2017/06/05'];

    jQuery('#datetimepicker_start').datetimepicker({
        format:'Y/m/d',
        disabledDates: dates_disabled,
        onShow:function( ct ){
            this.setOptions({
                maxDate:jQuery('#datetimepicker_end').val()?jQuery('#datetimepicker_end').val():false
            })
        },
        timepicker:false
    });
    jQuery('#datetimepicker_end').datetimepicker({
        format:'Y/m/d',
        onShow:function( ct ){
            this.setOptions({
                minDate:jQuery('#datetimepicker_start').val()?jQuery('#datetimepicker_start').val():false
            })
        },
        timepicker:false
    });

</script>

<?php $this->end() ?>
