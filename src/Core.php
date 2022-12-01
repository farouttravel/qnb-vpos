<?php

namespace Vpos;

use Exception;

class Core
{
    const HOMEPAGE_NAME = 'Home';
    const RESULT_PAGE_NAME = 'Payfor3DHostPayment';
    const PAGE_NAME_NOT_FOUND = 'NotFound';

    public $pageName;

    function __construct()
    {
        $this->pageName = isset($_POST["3DStatus"]) ? self::RESULT_PAGE_NAME : self::pageParameter();
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
        return isset($_GET['p']) ? $_GET['p'] : self::HOMEPAGE_NAME;
    }

    function loadPage()
    {
        if (!$this->isPageExists()) {
            http_response_code(404);

            $this->setPageName(self::PAGE_NAME_NOT_FOUND);
        }

        include_once $this->getAbsolutePagePath();
    }
}