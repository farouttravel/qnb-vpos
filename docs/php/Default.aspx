<%@ Page Language="C#" AutoEventWireup="true" %>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <link href="https://vpostest.qnbfinansbank.com//PayforScriptGenerator///Content/bootstrap.min.css" rel="stylesheet" />
    <script src="https://vpostest.qnbfinansbank.com//PayforScriptGenerator///Scripts/jquery-2.1.4.min.js"></script>
    <script src="https://vpostest.qnbfinansbank.com//PayforScriptGenerator///Scripts/bootstrap.min.js"></script>
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
                            <div id="logoLeft" runat="server" style="background-repeat: no-repeat; float: right; height: 65px; width: 220px; background-image: url('https://vpostest.qnbfinansbank.com/Common/Styles/images/memberLogos/FinansbankLeft.png');">
                            </div> 
                        </td>      
                        <td>       
                            <h1> Test Scriptleri</h1>
                        </td>
                        <td> 
                            <div id="logoRight" runat="server" style="background-repeat: no-repeat; float: left; height: 65px; width: 220px; background-image: url('https://vpostest.qnbfinansbank.com/Common/Styles/images/memberLogos/FinansbankRight.png');">
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
                            <tr><td><a href="https://vpostest.qnbfinansbank.com//PayforScriptGenerator//PayforScripts//5//009600000005835//php//PayforAuth.php" class="btn-link alert-link" target="_blank" >PayforAuth</a></td></tr>
<tr><td><a href="https://vpostest.qnbfinansbank.com//PayforScriptGenerator//PayforScripts//5//009600000005835//php//PayforBatchClose.php" class="btn-link alert-link" target="_blank" >PayforBatchClose</a></td></tr>
<tr><td><a href="https://vpostest.qnbfinansbank.com//PayforScriptGenerator//PayforScripts//5//009600000005835//php//PayforInstallmentAuth.php" class="btn-link alert-link" target="_blank" >PayforInstallmentAuth</a></td></tr>
<tr><td><a href="https://vpostest.qnbfinansbank.com//PayforScriptGenerator//PayforScripts//5//009600000005835//php//PayforOrderInquiry.php" class="btn-link alert-link" target="_blank" >PayforOrderInquiry</a></td></tr>
<tr><td><a href="https://vpostest.qnbfinansbank.com//PayforScriptGenerator//PayforScripts//5//009600000005835//php//PayforPostAuth.php" class="btn-link alert-link" target="_blank" >PayforPostAuth</a></td></tr>
<tr><td><a href="https://vpostest.qnbfinansbank.com//PayforScriptGenerator//PayforScripts//5//009600000005835//php//PayforPreAuth.php" class="btn-link alert-link" target="_blank" >PayforPreAuth</a></td></tr>
<tr><td><a href="https://vpostest.qnbfinansbank.com//PayforScriptGenerator//PayforScripts//5//009600000005835//php//PayforRefund.php" class="btn-link alert-link" target="_blank" >PayforRefund</a></td></tr>
<tr><td><a href="https://vpostest.qnbfinansbank.com//PayforScriptGenerator//PayforScripts//5//009600000005835//php//PayforTxnHistory.php" class="btn-link alert-link" target="_blank" >PayforTxnHistory</a></td></tr>
<tr><td><a href="https://vpostest.qnbfinansbank.com//PayforScriptGenerator//PayforScripts//5//009600000005835//php//PayforEodDetail.php" class="btn-link alert-link" target="_blank" >PayforEodDetail</a></td></tr>
<tr><td><a href="https://vpostest.qnbfinansbank.com//PayforScriptGenerator//PayforScripts//5//009600000005835//php//PayforVoid.php" class="btn-link alert-link" target="_blank" >PayforVoid</a></td></tr>
<tr><td><a href="https://vpostest.qnbfinansbank.com//PayforScriptGenerator//PayforScripts//5//009600000005835//php//PayforParaPuanInquiry.php" class="btn-link alert-link" target="_blank" >PayforParaPuanInquiry</a></td></tr>
<tr><td><a href="https://vpostest.qnbfinansbank.com//PayforScriptGenerator//PayforScripts//5//009600000005835//php//PayforParaPuanAuth.php" class="btn-link alert-link" target="_blank" >PayforParaPuanAuth</a></td></tr>
<tr><td><a href="https://vpostest.qnbfinansbank.com//PayforScriptGenerator//PayforScripts//5//009600000005835//php//PayforInsurance.php" class="btn-link alert-link" target="_blank" >PayforInsurance</a></td></tr>
<tr><td><a href="https://vpostest.qnbfinansbank.com//PayforScriptGenerator//PayforScripts//5//009600000005835//php//PayforPaymentLink.php" class="btn-link alert-link" target="_blank" >PayforPaymentLink</a></td></tr>
<tr><td><a href="https://vpostest.qnbfinansbank.com//PayforScriptGenerator//PayforScripts//5//009600000005835//php//PayforPaymentLinkReport.php" class="btn-link alert-link" target="_blank" >PayforPaymentLinkReport</a></td></tr>
<tr><td><a href="https://vpostest.qnbfinansbank.com//PayforScriptGenerator//PayforScripts//5//009600000005835//php//PayforAuthPNR.php" class="btn-link alert-link" target="_blank" >PayforAuthPNR</a></td></tr>
<tr><td><a href="https://vpostest.qnbfinansbank.com//PayforScriptGenerator//PayforScripts//5//009600000005835//php//Payfor3DPay.php" class="btn-link alert-link" target="_blank" >Payfor3DPay</a></td></tr>
<tr><td><a href="https://vpostest.qnbfinansbank.com//PayforScriptGenerator//PayforScripts//5//009600000005835//php//Payfor3DModel.php" class="btn-link alert-link" target="_blank" >Payfor3DModel</a></td></tr>
<tr><td><a href="https://vpostest.qnbfinansbank.com//PayforScriptGenerator//PayforScripts//5//009600000005835//php//Payfor3DHost.php" class="btn-link alert-link" target="_blank" >Payfor3DHost</a></td></tr>
<tr><td><a href="https://vpostest.qnbfinansbank.com//PayforScriptGenerator//PayforScripts//5//009600000005835//php//Payfor3DHostDetails1.php" class="btn-link alert-link" target="_blank" >Payfor3DHostDetails1</a></td></tr>
<tr><td><a href="https://vpostest.qnbfinansbank.com//PayforScriptGenerator//PayforScripts//5//009600000005835//php//Payfor3DHostDetails2.php" class="btn-link alert-link" target="_blank" >Payfor3DHostDetails2</a></td></tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>

