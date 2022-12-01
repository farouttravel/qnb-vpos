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

    public function __construct($name)
    {
        $this->name = $name;
        $this->parameters = [];

        foreach (self::LOOK_UP_PARAMETERS[$name] as $parameter) {
            $envName = $this->getShapedParameterName($parameter);

            var_dump($envName);

            $this->parameters[$parameter] = !! env($envName) ? env($envName) : '';
        }
    }

    function getParameters() {
        return $this->parameters;
    }

    private function getShapedParameterName($parameter)
    {
        $parameter = preg_replace('/((?:^|[A-Z])[a-z]+)/','_$1', $this->name . $parameter);

        return strtoupper($parameter);
    }
}