<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html>
<head>
    <title>QNB Finansbank - Satis</title>
    <meta http-equiv="Content-Language" content="tr">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9">
    <link href="Site.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
if ($_POST){
    $data = "".
        "MbrId=5&".
        //Kurum Kodu
        "MerchantID=085300000009597&".
        //Üye işyeri no
        "UserCode=QNB_ISYERI_KULLANICI&".
        //Kullanıcı Kodu
        "UserPass=9ZPar&".
        //Kullanıcı Şifre
        "OrderId=".$_POST["OrderId"]."&".
        //Sipariş numarası
        "IsDisposable=0&".
        //Link Tek Kullanımlık Mı?
        "TxnType=PaymentLink&".
        //İşlem Tipi
        "PurchAmount=".$_POST["PurchAmount"]."&".
        //Tutar
        "Currency=949&".
        //Para Birimi
        "IsMerchantDes=".$_POST["IsMerchantDes"]."&".
        //Üye iş yeri açıklama yazacak mı?
        "IsCustomerDes=".$_POST["IsCustomerDes"]."&".
        //Müşteri Açıklama yazacak mı?
        "MerchantDescription=".$_POST["MerchantDescription"]."&".
        //Üye iş yeri açıklaması
        "LinkCommunicationDetail=".$_POST["LinkCommunicationDetail"]."&".
        //Link iletişim bilgisi
        "LinkSendType=".$_POST["LinkSendType"]."&".
        //Link Gönderim Türü
        "LinkStartExpireDatetime=".$_POST["LinkStartExpireDatetime"]."&".
        //Link Süresi Başlangıç zamanı
        "LinkEndExpireDatetime=".$_POST["LinkEndExpireDatetime"]."&".
        //Link Süresi bitiş zamanı
        "Channel=".$_POST["Channel"]."&".
        //Link Gönderim Kanalı
        "InformMerchant=".$_POST["InformMerchant"]."&".
        //Merchant Bilgisi
        "MOTO=".$_POST["MOTO"]."&".
        //MOTO mu
        "Lang=TR&".
        //Dil
        $url = "https://vpostest.qnbfinansbank.com/Gateway/Default.aspx";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,2);
    curl_setopt($ch, CURLOPT_SSLVERSION, 6);
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
        <table class="tableClass">
            <tr>
                <td colspan="2">
                    <h1>
                        QNB Finansbank - Linkle Ödeme
                    </h1>
                </td>
            </tr>
            <tr>
                <td style="text-align: right">
                    Link Tek Kullanımlık Mı? :
                </td>
                <td style="text-align: left">
                    <input type="text" name="IsDisposable" maxlength="1"    class="inputClass" value="" />
            </tr>

            <tr>
                <td style="text-align: right">
                    Üye iş yeri açıklama yazacak mı? :
                </td>
                <td style="text-align: left">
                    <input type="text" name="IsMerchantDes" maxlength="1"    class="inputClass" value="" />
            </tr>

            <tr>
                <td style="text-align: right">
                    Müşteri açıklama yazacak mı? :
                </td>
                <td style="text-align: left">
                    <input type="text" name="IsCustomerDes" maxlength="1"    class="inputClass" value="" />
            </tr>

            <tr>
                <td style="text-align: right">
                    Üye iş yeri açıklaması:
                </td>
                <td style="text-align: left">
                    <input type="text" name="MerchantDescription" maxlength="1"    class="inputClass" value="" />
            </tr>

            <tr>
                <td style="text-align: right">
                    Link Gönderim Türü :
                </td>
                <td style="text-align: left">
                    <input type="text" name="LinkSendType" maxlength="4"    class="inputClass" value="" />
            </tr>

            <tr>
                <td style="text-align: right">
                    Link Süresi Başlangıç zamanı :
                </td>
                <td style="text-align: left">
                    <input type="text" name="LinkStartExpireDatetime" maxlength="4"    class="inputClass" value="" />
            </tr>

            <tr>
                <td style="text-align: right">
                    Link Süresi bitiş zamanı :
                </td>
                <td style="text-align: left">
                    <input type="text" name="LinkEndExpireDatetime" maxlength="4"    class="inputClass" value="" />
            </tr>

            <tr>
                <td style="text-align: right">
                    Link Gönderim Kanalı :
                </td>
                <td style="text-align: left">
                    <input type="text" name="Channel" maxlength="4"    class="inputClass" value="" />
            </tr>

            <tr>
                <td style="text-align: right">
                    Merhant Bilgisi
                </td>
                <td style="text-align: left">
                    <input type="text" name="InformMerchant" maxlength="4"    class="inputClass" value="" />
            </tr>

            <tr>
                <td style="text-align: right">
                    Link iletişim bilgisi :
                </td>
                <td style="text-align: left">
                    <input type="text" name="LinkCommunicationDetail" maxlength="64"    class="inputClass" value="" />
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
                    Sipariş numarası :
                </td>
                <td style="text-align: left">
                    <input type="text" name="OrderId" maxlength="50"    class="inputClass" value="" />
            </tr>

            <tr>
                <td style="text-align: right">
                    Moto-Ecommerce :
                </td>
                <td style="text-align: left">
                    <select name="MOTO" class="inputClass">
                        <option value="0" selected="selected">Ecommerce</option>
                        <option value="1" >Moto</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td align="center" colspan="2">
                    <input type="submit" value="Gönder" class="buttonClass" />
                </td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>