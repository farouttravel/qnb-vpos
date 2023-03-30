<?php

namespace Vpos;

class Core
{
    const PAGE_NAME_HOMEPAGE = 'Home';
    const PAGE_NAME_RESULT = 'Result';
    const PAGE_NAME_NOT_FOUND = 'NotFound';
    const PAGE_NAME_REVIEW = 'Review';

    public $pageName;

    function __construct()
    {
        $this->pageName = isset($_POST["3DStatus"]) ? self::PAGE_NAME_RESULT : self::pageParameter();
    }

    function getPageName()
    {
        return $this->pageName;
    }

    function setPageName($newName)
    {
        $this->pageName = $newName;
    }

    function getRelativePagePath()
    {
        return '../pages/' . $this->getPageName() . '.php';
    }

    function getAbsolutePagePath()
    {
        return __DIR__ . '/' . $this->getRelativePagePath();
    }

    function isPageExists()
    {
        return file_exists($this->getAbsolutePagePath());
    }

    static function pageParameter()
    {
        return isset($_GET['p']) ? $_GET['p'] : self::PAGE_NAME_HOMEPAGE;
    }

    private function loadPageData() {
        switch ($_GET['p']) {
            case 'Form':
                $type = new \Vpos\Type();
                $parameters = $type->getParameters();
                $action = array_shift($parameters);
                return [
                    'dummyData' => [
                        'InstallmentCount' => '0',
                        'Currency' => env('CURRENCY'),
                        'OrderId' => 'FO' . time(),
                        'OrgOrderId' => '',
                        'PurchAmount' => '3',
                        'Lang' => env('LANG'),
                        'MOTO' => env('ECOMMERCE')
                    ],
                    'parameters' => $parameters,
                    'action' => $action
                ];
            case 'Review':
                if ($_POST['vpos']['fields']['SecureType'] !== 'NonSecure') {
                    $Rnd = microtime();
                    $hashStr =
                        $_POST['vpos']['fields']['MbrId'] .
                        $_POST['vpos']['fields']['OrderId'] .
                        $_POST['vpos']['fields']['PurchAmount'] .
                        $_POST['vpos']['fields']['OkUrl'] .
                        $_POST['vpos']['fields']['FailUrl'] .
                        $_POST['vpos']['fields']['TxnType'] .
                        $_POST['vpos']['fields']['InstallmentCount'] .
                        $Rnd .
                        $_POST['vpos']['fields']['MerchantPass'];
                    $Hash = base64_encode(pack('H*', sha1($hashStr)));
                    return [
                        'Rnd' => $Rnd,
                        'Hash' => $Hash
                    ];
                }
            default:
                return [];
        }
    }

    function load()
    {
        if (
            !$this->isPageExists() OR
            (
                isset($_GET['p']) AND
                $_GET['p'] === self::PAGE_NAME_REVIEW AND
                !isset($_POST['vpos'])
            )
        ) {
            http_response_code(404);

            $this->setPageName(self::PAGE_NAME_NOT_FOUND);
        }

        $pageData = $this->loadPageData();
        include_once $this->getAbsolutePagePath();
    }
}