<?php

namespace Vpos;

class Core
{
    const PAGE_NAME_HOMEPAGE = 'Home';
    const PAGE_NAME_RESULT = 'Payfor3DHostPayment';
    const PAGE_NAME_NOT_FOUND = 'NotFound';

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

    function loadPage()
    {
        if (!$this->isPageExists()) {
            http_response_code(404);

            $this->setPageName(self::PAGE_NAME_NOT_FOUND);
        }

        include_once $this->getAbsolutePagePath();
    }
}