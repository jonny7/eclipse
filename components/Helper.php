<?php

declare(strict_types=1);

namespace app\components;

use Yii;
use yii\base\Component;
use yii\helpers\ArrayHelper;

/**
 * This is a custom helper method
 * designed to keep all of the methods that are used across models
 * these generally involve calling Oracle Packages, DB Connections and
 * various types of date checkers
 */
class Helper extends Component
{
    public function IAmATest(){
      return true;
    }
}
