<?php

namespace Vpos;

define('PARAMETERS_LOOK_UP', include 'blueprints.php');

class Type
{
    private $name;
    private $parameters;

    public function __construct()
    {
        $this->name = isset($_GET['t']) ? $_GET['t'] : '3DHost';
        $this->parameters = [];

        if (!isset(PARAMETERS_LOOK_UP[$this->name]))
            throw new \Exception('404', 404);

        foreach (PARAMETERS_LOOK_UP[$this->name] as $parameter) {
            $envName = $this->getShapedParameterName($parameter);

            $this->parameters[$parameter] = !! env($envName) ? env($envName) : '';
        }
    }

    function getParameters() {
        return $this->parameters;
    }

    private function getShapedParameterName($parameter)
    {
        $parameter = preg_replace('/((?:^|[A-Z])[a-z]+|3D|ID|1|2)/','_$1', $this->name . $parameter);

        return ltrim(strtoupper($parameter), '_');
    }
}