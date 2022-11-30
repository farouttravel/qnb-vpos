<?php
$MbrId = env('3D_HOST_MBR_ID');
$MerchantID = env('3D_HOST_MERCHANT_ID');
$MerchantPass = env('3D_HOST_MERCHANT_PASS');
$UserCode = env('3D_HOST_USER_CODE');
$SecureType = env('3D_HOST_SECURE_TYPE');
$TxnType = env('3D_HOST_TXN_TYPE');
$InstallmentCount = "0";
$Currency = env('3D_HOST_CURRENCY_TL');
$OkUrl = env('3D_HOST_OK_URL');
$FailUrl = env('3D_HOST_FAIL_URL');
$OrderId = '234234';
$OrgOrderId = '';
$PurchAmount = '4';
$Lang = env('3D_HOST_LANG_TR');
$rnd = microtime();
$hashstr = $MbrId . $OrderId . $PurchAmount . $OkUrl . $FailUrl . $TxnType . $InstallmentCount . $rnd . $MerchantPass;
$hash = base64_encode(pack('H*', sha1($hashstr)));
?>

<form method="post" action="<?= env('3D_HOST_FORM_ACTION') ?>">
    <h2>
        PayFor - 3D Host
    </h2>

    <input type='submit' value='Gonder' class='btn btn-primary'/>

    <input type="hidden" name="MbrId" value="<?php  echo $MbrId ?>">
    <input type="hidden" name="MerchantID" value="<?php  echo $MerchantID ?>">
    <input type="hidden" name="UserCode" value="<?php  echo $UserCode ?>">
    <input type="hidden" name="SecureType" value="<?php  echo $SecureType ?>">
    <input type="hidden" name="TxnType" value="<?php  echo $TxnType ?>">
    <input type="hidden" name="InstallmentCount" value="<?php  echo $InstallmentCount ?>">
    <input type="hidden" name="Currency" value="<?php  echo $Currency ?>">
    <input type="hidden" name="OkUrl" value="<?php  echo $OkUrl ?>">
    <input type="hidden" name="FailUrl" value="<?php  echo $FailUrl ?>">
    <input type="hidden" name="OrderId" value="<?php  echo $OrderId ?>">
    <input type="hidden" name="OrgOrderId" value="<?php  echo $OrgOrderId ?>">
    <input type="hidden" name="PurchAmount" value="<?php  echo $PurchAmount ?>">
    <input type="hidden" name="Lang" value="<?php  echo $Lang ?>">
    <input type="hidden" name="Rnd" value="<?php echo $rnd?>">
    <input type="hidden" name="Hash" value="<?php echo $hash?>">
</form>