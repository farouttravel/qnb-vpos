<?php

$dummyData = [
    'InstallmentCount' => '0',
    'Currency' => env('CURRENCY'),
    'OrderId' => 'FO' . time(),
    'OrgOrderId' => '',
    'PurchAmount' => '3',
    'Lang' => env('LANG')
];
?>

<form method="post" class="form-horizontal" action="/?p=Form">
    <h2>
        <?= isset($_GET['p']) ? str_split($_GET['p'], 6)[1] : ""; ?>
    </h2>

    <input type="hidden" name="vpos[action]" value="<?= env('3D_HOST_FORM_ACTION') ?>"/>

    <?php foreach ((new \Vpos\Type('3DHost'))->getParameters() as $name => $value) : ?>
        <div class="form-group form-group-sm">
            <label class="col-sm-2 control-label" for="<?= $name ?>Id"><?= $name ?></label>
            <div class="col-sm-10">
                <input
                        type="text"
                        class="form-control"
                    <?= ($name === 'Rnd' or $name === 'Hash') ? 'disabled' : '' ?>
                        name="<?= 'vpos[fields][' . $name . ']' ?>"
                        value="<?= ($value OR $name === 'Rnd' or $name === 'Hash') ? $value : $dummyData[$name] ?>" id="<?= $name ?>Id"
                />
            </div>
        </div>
    <?php endforeach; ?>

    <input type="submit" class="btn btn-primary" value="Review"/>
</form>