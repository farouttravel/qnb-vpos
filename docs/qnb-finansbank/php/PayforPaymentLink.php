<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
 <html>
     <head>
         <title>PayFor - Ödeme Linki Oluşturma</title>
         <meta http-equiv="Content-Language" content="tr">
         <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9">
         <link href="Site.css" rel="stylesheet" type="text/css" />
     </head>
     <body>
     <?php
         if ($_POST){
         $data = "".
          "MbrId=5&".                                                                         //Kurum Kodu
          "MerchantID=085300000009746&".                                                               //Language_MerchantID
          "UserCode=farouttest&".                                                                   //Kullanici Kodu
          "UserPass=tRii8&".                                                                   //Kullanici Sifre
          "OrderId=".$_POST["OrderId"]."&".                                                         //Siparis Numarasi
          "TxnType=PaymentLink&".                                                                   //Islem Tipi
          "PurchAmount=".$_POST["PurchAmount"]."&".                                                 //Tutar
          "Currency=949&".                                                                   //Para Birimi
          "InstallmentCount=".$_POST["InstallmentCount"]."&".                                       //Taksit Sayisi
          "IsDisposable=1&".                                                                        //Language_IsDisposable
          "IsMerchantDes=".$_POST["IsMerchantDes"]."&".                                             //Üye iş yeri açıklama yazacak mı
          "MerchantDescription=".$_POST["MerchantDescription"]."&".                                 //Üye iş yeri açıklaması
          "IsCustomerDes=".$_POST["IsCustomerDes"]."&".                                             //Müşteri Açıklama yazacak mı
          "InformMerchant=".$_POST["InformMerchant"]."&".                                           //Language_InformMerchant
          "LinkSendType=".$_POST["LinkSendType"]."&".                                               //Link Gönderim Türü
          "LinkCommunicationDetail=".$_POST["LinkCommunicationDetail"]."&".                         //Link iletişim bilgisiDetail
          "LinkStartExpireDatetime=".$_POST["LinkStartExpireDatetime"]."&".                         //Link Süresi Başlangıç zamanı
          "LinkEndExpireDatetime=".$_POST["LinkEndExpireDatetime"]."&".                             //Link Süresi bitiş zamanı
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
                         PayFor - Ödeme Linki Oluşturma
                     </h1>
                 </td>
             </tr>
             <tr>
                 <td style="text-align: right">
                     Siparis Numarasi :
                 </td>
                 <td style="text-align: left">
                     <input type="text" name="OrderId" maxlength="50"    class="inputClass" value="" />
             </tr>

             <tr>
                 <td style="text-align: right">
                     Tutar :
                 </td>
                 <td style="text-align: left">
                     <input type="text" name="PurchAmount" maxlength="20"    class="inputClass" value="" />
             </tr>

             <tr>
                 <td style="text-align: right">
                     Üye iş yeri açıklama yazacak mı :
                 </td>
                 <td style="text-align: left">
                     <select name="IsMerchantDes" class="inputClass">
                         <option value="0" selected="selected">Hayır</option>
                         <option value="1" >Evet</option>
                     </select>
                 </td>
             </tr>

             <tr>
                 <td style="text-align: right">
                     Üye iş yeri açıklaması :
                 </td>
                 <td style="text-align: left">
                     <input type="text" name="MerchantDescription" maxlength="CloumnLength_MerchantDescription"    class="inputClass" value="" />
             </tr>

             <tr>
                 <td style="text-align: right">
                     Link Gönderim Türü :
                 </td>
                 <td style="text-align: left">
                     <select name="LinkSendType" class="inputClass">
                         <option value="0" selected="selected">Hayır</option>
                         <option value="1">Evet</option>
                     </select>
                 </td>
             </tr>

             <tr>
                 <td style="text-align: right">
                     Language_InformMerchant :
                 </td>
                 <td style="text-align: left">
                     <select name="LinkSendType" class="inputClass">
                         <option value="" selected="selected">Seciniz</option>
                         <option value="Sms">SMS</option>
                         <option value="Email" >E-Mail</option>
                     </select>
                 </td>
             </tr>

             <tr>
                 <td style="text-align: right">
                     Müşteri Açıklama yazacak mı :
                 </td>
                 <td style="text-align: left">
                     <select name="IsCustomerDes" class="inputClass">
                         <option value="0" selected="selected">Hayır</option>
                         <option value="1">Evet</option>
                     </select>
                 </td>
             </tr>

             <tr>
                 <td style="text-align: right">
                     Link iletişim bilgisiDetail :
                 </td>
                 <td style="text-align: left">
                     <input type="text" name="LinkCommunicationDetail" maxlength="CloumnLength_LinkCommunicationDetail"    class="inputClass" value="" />
             </tr>

             <tr>
                 <td style="text-align: right">
                     Link Süresi Başlangıç zamanı :
                 </td>
                 <td style="text-align: left">
                     <input type="text" name="LinkStartExpireDatetime" maxlength="CloumnLength_LinkStartExpireDatetime"    class="inputClass" value="" />
             </tr>

             <tr>
                 <td style="text-align: right">
                     Link Süresi bitiş zamanı :
                 </td>
                 <td style="text-align: left">
                     <input type="text" name="LinkEndExpireDatetime" maxlength="CloumnLength_LinkEndExpireDatetime"    class="inputClass" value="" />
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

