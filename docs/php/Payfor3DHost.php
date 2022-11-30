<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
 <html>
     <head>
         <title>PayFor - 3D Host</title>
         <meta http-equiv="Content-Language" content="tr">
         <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9">
         <link href="Site.css" rel="stylesheet" type="text/css" />
     </head>
     <body>
		<?php
          $MbrId="5";                                                                         //Kurum Kodu
          $MerchantID="085300000009746";                                                               //Language_MerchantID
          $MerchantPass="12345678";                                                           //Language_MerchantPass
          $UserCode="farouttest";                                                                   //Kullanici Kodu
          $SecureType="3DHost";                                                                     //Language_SecureType
          $TxnType="Auth";                                                                          //Islem Tipi
          $InstallmentCount="0";                                                                    //Taksit Sayisi
          $Currency="949";                                                                   //Para Birimi
          $OkUrl="http://localhost:3000/Payfor3DHostPayment.php";                                                                         //Language_OkUrl
          $FailUrl="http://localhost:3000/Payfor3DHostPayment.php";                                                                     //Language_FailUrl
          $OrderId="O34543543";                                                                     //Siparis Numarasi
          $OrgOrderId="";                                                               //Orijinal Islem Siparis Numarasi
          $PurchAmount="3";                                                                         //Tutar
          $Lang="TR";                                                                           //Language_Lang
		$rnd = microtime(); 
		$hashstr = $MbrId . $OrderId . $PurchAmount . $OkUrl . $FailUrl . $TxnType . $InstallmentCount . $rnd . $MerchantPass;
		$hash = base64_encode(pack('H*',sha1($hashstr)));
		?>
<center>
<form method="post" action="https://vpostest.qnbfinansbank.com/Gateway/3DHost.aspx">
			<table class="table">
            	<tr>
					<td colspan='2'>
						<h1>
							PayFor - 3D Host
						</h1>
					</td>
				</tr>
             <tr>
             	<td colspan='2'>
             		<input type='submit' value='Gonder' class='btn btn-primary' />
             	</td>
             </tr>
			</table>

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
    </center>
</body>
</html>
