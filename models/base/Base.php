<?php

namespace app\models\base;

class Base 
{
    public $test = 'I am a test';

    public function executeFunc($user, $item, $params)
    {
        return isset($params) ? $params['params'] == 'billingOverTime' : false;
    }
}
