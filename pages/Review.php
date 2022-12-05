<?php
if ($_POST['vpos']['fields']['SecureType'] !== 'NonSecure') {
    $Rnd = microtime();
    $hashStr =
        $_POST['vpos']['fields']['MbrId'] .
        $_POST['vpos']['fields']['OrderId'] .
        $_POST['vpos']['fields']['PurchAmount'] .
        $_POST['vpos']['fields']['OkUrl'] .
        $_POST['vpos']['fields']['FailUrl'] .
        $_POST['vpos']['fields']['TxnType'] .
        $_POST['vpos']['fields']['InstallmentCount'] .
        $Rnd .
        $_POST['vpos']['fields']['MerchantPass'];
    $Hash = base64_encode(pack('H*', sha1($hashStr)));
}
?>

<h2>Review</h2>

<form method="post" action="<?= $_POST['vpos']['action'] ?>">
    <table class="table table-hover">
        <tr>
            <th>Data Name</th>
            <th>Value</th>
        </tr>
        <?php foreach ($_POST['vpos']['fields'] as $name => $value) : ?>
            <tr>
                <td><?= $name ?></td>
                <td><?= $value ?></td>
                <input type="hidden" name="<?= $name ?>" value="<?= $value ?>"/>
            </tr>
        <?php endforeach; ?>
        <?php if ($_POST['vpos']['fields']['SecureType'] !== 'NonSecure') : ?>
            <tr>
                <td>Rnd</td>
                <td><?= $Rnd ?></td>
                <input type="hidden" name="Rnd" value="<?= $Rnd ?>"/>
            </tr>
            <tr>
                <td>Hash</td>
                <td><?= $Hash ?></td>
                <input type="hidden" name="Hash" value="<?= $Hash ?>"/>
            </tr>
        <?php endif; ?>

    <button type="button" onclick="history.back();return false;" class="btn btn-danger">Back</button>
    <button type="submit" class="btn btn-primary">Proceed</button>
</form>