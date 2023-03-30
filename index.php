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
                    <h1>QNB Finansbank</h1>
                </td>
                <td>
                    <h1>Test Scripts</h1>
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
