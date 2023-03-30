<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
 <html>
     <head>
         <title>PayFor - Para Puan Sorgulama</title>
         <meta http-equiv="Content-Language" content="tr">
         <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9">
         <link href="Site.css" rel="stylesheet" type="text/css" />
     </head>
     <body>
     <?php
         if ($_POST){
         $data = "".
          "MbrId=5&".                                                                         //Kurum Kodu
          "MerchantID=009600000005835&".                                                               //Language_MerchantID
          "UserCode=farouttest&".                                                                   //Kullanici Kodu
          "UserPass=vyd5G&".                                                                   //Kullanici Sifre
          "OrderId=".$_POST["OrderId"]."&".                                                         //Siparis Numarasi
          "SecureType=Inquiry&".                                                                    //Language_SecureType
          "TxnType=ParaPuanInquiry&".                                                               //Islem Tipi
          "Currency=949&".                                                                          //Para Birimi
          "Pan=".$_POST["Pan"]."&".                                                                 //Kredi Kart Numarasi
          "Cvv2=".$_POST["Cvv2"]."&".                                                               //Guvenlik Kodu (Cvv)
          "Expiry=".$_POST["Expiry"]."&".                                                           //Son Kullanma Tarihi (MMYY)
          "Lang=TR&".                                                                           //Language_Lang
         $url = "https://vpostest.qnbfinansbank.com/Gateway/Default.aspx";
         $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL,$url);
         curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,2);
         curl_setopt($ch, CURLOPT_SSLVERSION, 4);	
         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
         curl_setopt($ch, CURLOPT_TIMEOUT, 90);
         curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
         $result = curl_exec($ch); 
         echo "<br>";
         if (curl_errno($ch)) {
         	print curl_error($ch);
         } else {
            curl_close($ch);
         }
         $resultValues = explode(";;", $result);
         echo "<center><table class='tableClass'>";
         foreach($resultValues as $resultt)
         {
         	list($key,$value)= explode("=", $resultt);
         		echo "<tr><td style='text-align: right'>".$key."</td>";
         	echo "<td style='text-align: left'>".$value."</td></tr>";
         }
         echo "</table></center><br>";
       }
    ?>
         <center>
         <form method="post">
         <table class="table">
	            <tr>
                 <td colspan="2">
                     <h1>
                         PayFor - Para Puan Sorgulama
                     </h1>
                 </td>
             </tr>
             <tr>
                 <td style="text-align: right">
                     Kredi Kart Numarasi :
                 </td>
                 <td style="text-align: left">
                     <input type="text" name="Pan" maxlength="19"    class="inputClass" value="" />
             </tr>

             <tr>
                 <td style="text-align: right">
                     Guvenlik Kodu (Cvv) :
                 </td>
                 <td style="text-align: left">
                     <input type="text" name="Cvv2" maxlength="4"    class="inputClass" value="" />
             </tr>

             <tr>
                 <td style="text-align: right">
                     Son Kullanma Tarihi (MMYY) :
                 </td>
                 <td style="text-align: left">
                     <input type="text" name="Expiry" maxlength="4"    class="inputClass" value="" />
             </tr>

             <tr>
                 <td style="text-align: right">
                     Siparis Numarasi :
                 </td>
                 <td style="text-align: left">
                     <input type="text" name="OrderId" maxlength="50"    class="inputClass" value="" />
             </tr>

             <tr>
                 <td align="center" colspan="2">
                     <input type="submit" value="Gonder" class="buttonClass" />
                 </td>
             </tr>
         </table>
         </form>
         </center>
     </body>
</html>

