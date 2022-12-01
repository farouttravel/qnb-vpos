<?php
include_once './vendor/autoload.php';
include_once './layout/header.html';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

function env($name)
{
    return $_ENV[$name];
}
?>

<div class="container">
    <div class="page-header text-center">
        <table class="table table-hover ">
            <tr>
                <td>
                    <div id="logoLeft" runat="server"
                         style="background-repeat: no-repeat; float: right; height: 65px; width: 220px; background-image: url('https://vpos.qnbfinansbank.com/Common/Styles/images/memberLogos/FinansbankLeft.png');">
                    </div>
                </td>
                <td>
                    <h1>SEA SAFARİ TURİZM Test Scriptleri</h1>
                </td>
            </tr>
        </table>
        <nav class="text-left">
            <a href="/">Anasayfa</a>
        </nav>
    </div>

    <div class="row">
        <div class="col-12">
            <?php

            $page = isset($_GET['p']) ?
                $_GET['p'] :
                (isset($_POST["3DStatus"]) ? 'Payfor3DHostPayment' : 'Home');
            $path = './pages/' . $page . '.php';

            if (file_exists($path)) {
                include_once $path;
            } else {
                throw new Exception('404: Not Found!', 404);
            }
            ?>
        </div>

        <?php if ($page !== 'Payfor3DHostPayment' AND $page !== 'Home') : ?>
            <div class="col-12">
                <h3>Form Parameters:</h3>
                <table id="json-table"></table>
            </div>
        <?php endif ?>
    </div>

    <?php include_once './layout/footer.html' ?>
