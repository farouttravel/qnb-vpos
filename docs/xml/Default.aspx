<%@ Page Language="C#" AutoEventWireup="true" %>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <link href="https://vpos.qnbfinansbank.com//PayforScriptGenerator///Content/bootstrap.min.css" rel="stylesheet" />
    <script src="https://vpos.qnbfinansbank.com//PayforScriptGenerator///Scripts/jquery-2.1.4.min.js"></script>
    <script src="https://vpos.qnbfinansbank.com//PayforScriptGenerator///Scripts/bootstrap.min.js"></script>
    <title></title>
    <style type="text/css">
        #tblForm {
            width: 60%;
            margin-left: 20%;
        }

        .error {
            color: red;
        }

        body {
            background: #fafafa;
        }
    </style>
</head>
<body>
    <form id="form1" runat="server">
        <div class="row"> 
            <div class="page-header text-center"> 
                <table class="table table-hover ">
                    <tr>      
                        <td>  
                            <div id="logoLeft" runat="server" style="background-repeat: no-repeat; float: right; height: 65px; width: 220px; background-image: url('https://vpos.qnbfinansbank.com/Common/Styles/images/memberLogos/FinansbankLeft.png');">
                            </div> 
                        </td>      
                        <td>       
                            <h1>SEA SAFARİ TURİZM Test Scriptleri</h1>
                        </td>
                        <td> 
                            <div id="logoRight" runat="server" style="background-repeat: no-repeat; float: left; height: 65px; width: 220px; background-image: url('https://vpos.qnbfinansbank.com/Common/Styles/images/memberLogos/FinansbankRight.png');">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="text-center">
                    <div class="col-lg-12">
                        <table id="tblForm" class="table table-hover ">
                            <tr><td><a href="https://vpos.qnbfinansbank.com//Payfor.UI//PayforScripts//5//009600000005835//xml//PayforAuth.xml" class="btn-link alert-link" target="_blank" >PayforAuth</a></td></tr>
<tr><td><a href="https://vpos.qnbfinansbank.com//Payfor.UI//PayforScripts//5//009600000005835//xml//PayforBatchClose.xml" class="btn-link alert-link" target="_blank" >PayforBatchClose</a></td></tr>
<tr><td><a href="https://vpos.qnbfinansbank.com//Payfor.UI//PayforScripts//5//009600000005835//xml//PayforInstallmentAuth.xml" class="btn-link alert-link" target="_blank" >PayforInstallmentAuth</a></td></tr>
<tr><td><a href="https://vpos.qnbfinansbank.com//Payfor.UI//PayforScripts//5//009600000005835//xml//PayforOrderInquiry.xml" class="btn-link alert-link" target="_blank" >PayforOrderInquiry</a></td></tr>
<tr><td><a href="https://vpos.qnbfinansbank.com//Payfor.UI//PayforScripts//5//009600000005835//xml//PayforPostAuth.xml" class="btn-link alert-link" target="_blank" >PayforPostAuth</a></td></tr>
<tr><td><a href="https://vpos.qnbfinansbank.com//Payfor.UI//PayforScripts//5//009600000005835//xml//PayforPreAuth.xml" class="btn-link alert-link" target="_blank" >PayforPreAuth</a></td></tr>
<tr><td><a href="https://vpos.qnbfinansbank.com//Payfor.UI//PayforScripts//5//009600000005835//xml//PayforRefund.xml" class="btn-link alert-link" target="_blank" >PayforRefund</a></td></tr>
<tr><td><a href="https://vpos.qnbfinansbank.com//Payfor.UI//PayforScripts//5//009600000005835//xml//PayforTxnHistory.xml" class="btn-link alert-link" target="_blank" >PayforTxnHistory</a></td></tr>
<tr><td><a href="https://vpos.qnbfinansbank.com//Payfor.UI//PayforScripts//5//009600000005835//xml//PayforEodDetail.xml" class="btn-link alert-link" target="_blank" >PayforEodDetail</a></td></tr>
<tr><td><a href="https://vpos.qnbfinansbank.com//Payfor.UI//PayforScripts//5//009600000005835//xml//PayforVoid.xml" class="btn-link alert-link" target="_blank" >PayforVoid</a></td></tr>
<tr><td><a href="https://vpos.qnbfinansbank.com//Payfor.UI//PayforScripts//5//009600000005835//xml//PayforParaPuanInquiry.xml" class="btn-link alert-link" target="_blank" >PayforParaPuanInquiry</a></td></tr>
<tr><td><a href="https://vpos.qnbfinansbank.com//Payfor.UI//PayforScripts//5//009600000005835//xml//PayforParaPuanAuth.xml" class="btn-link alert-link" target="_blank" >PayforParaPuanAuth</a></td></tr>
<tr><td><a href="https://vpos.qnbfinansbank.com//Payfor.UI//PayforScripts//5//009600000005835//xml//PayforInsurance.xml" class="btn-link alert-link" target="_blank" >PayforInsurance</a></td></tr>
<tr><td><a href="https://vpos.qnbfinansbank.com//Payfor.UI//PayforScripts//5//009600000005835//xml//PayforPaymentLink.xml" class="btn-link alert-link" target="_blank" >PayforPaymentLink</a></td></tr>
<tr><td><a href="https://vpos.qnbfinansbank.com//Payfor.UI//PayforScripts//5//009600000005835//xml//PayforPaymentLinkReport.xml" class="btn-link alert-link" target="_blank" >PayforPaymentLinkReport</a></td></tr>
<tr><td><a href="https://vpos.qnbfinansbank.com//Payfor.UI//PayforScripts//5//009600000005835//xml//PayforAuthPNR.xml" class="btn-link alert-link" target="_blank" >PayforAuthPNR</a></td></tr>
<tr><td><a href="https://vpos.qnbfinansbank.com//Payfor.UI//PayforScripts//5//009600000005835//xml//Payfor3DPay.xml" class="btn-link alert-link" target="_blank" >Payfor3DPay</a></td></tr>
<tr><td><a href="https://vpos.qnbfinansbank.com//Payfor.UI//PayforScripts//5//009600000005835//xml//Payfor3DModel.xml" class="btn-link alert-link" target="_blank" >Payfor3DModel</a></td></tr>
<tr><td><a href="https://vpos.qnbfinansbank.com//Payfor.UI//PayforScripts//5//009600000005835//xml//Payfor3DHost.xml" class="btn-link alert-link" target="_blank" >Payfor3DHost</a></td></tr>
<tr><td><a href="https://vpos.qnbfinansbank.com//Payfor.UI//PayforScripts//5//009600000005835//xml//Payfor3DHostDetails1.xml" class="btn-link alert-link" target="_blank" >Payfor3DHostDetails1</a></td></tr>
<tr><td><a href="https://vpos.qnbfinansbank.com//Payfor.UI//PayforScripts//5//009600000005835//xml//Payfor3DHostDetails2.xml" class="btn-link alert-link" target="_blank" >Payfor3DHostDetails2</a></td></tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>

