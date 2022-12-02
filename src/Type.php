<?php

namespace Vpos;

class Type
{
    const LOOK_UP_PARAMETERS = [
        '3DHost' => [
            'MbrId',
            'MerchantID',
            'MerchantPass',
            'UserCode',
            'SecureType',
            'TxnType',
            'InstallmentCount',
            'Currency',
            'OkUrl',
            'FailUrl',
            'OrderId',
            'OrgOrderId',
            'PurchAmount',
            'Lang',
            'Rnd',
            'Hash'
        ]
    ];

    private $name;
    private $parameters;

    public function __construct()
    {
        $this->name = isset($_GET['t']) ? $_GET['t'] : '3DHost';
        $this->parameters = [];

        foreach (self::LOOK_UP_PARAMETERS[$this->name] as $parameter) {
            $envName = $this->getShapedParameterName($parameter);

            $this->parameters[$parameter] = !! env($envName) ? env($envName) : '';
        }
    }

    function getParameters() {
        return $this->parameters;
    }

    private function getShapedParameterName($parameter)
    {
        $parameter = preg_replace('/((?:^|[A-Z])[a-z]+|3D|ID)/','_$1', $this->name . $parameter);

        return ltrim(strtoupper($parameter), '_');
    }
}