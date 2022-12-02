<?php
include_once './vendor/autoload.php';
include_once './layout/header.html';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

function env($name)
{
    return isset($_ENV[$name]) ? $_ENV[$name] : null;
}

$app = new \Vpos\Core();
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
            <?php $app->loadPage(); ?>
        </div>
    </div>
</div>

<?php include_once './layout/footer.html' ?>
