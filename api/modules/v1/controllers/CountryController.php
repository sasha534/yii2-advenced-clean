<?php

namespace api\modules\v1\controllers;

use yii\rest\ActiveController;

/**
 * Country Controller API
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class CountryController extends ActiveController
{
    public function indexAction()
    {
        return '!!!!!!!!!!!!!!!!!!!!!!!!!';
    }

    public $modelClass = 'api\modules\v1\models\Country';

    /**
     * @inheritdoc
     */
    public function actions(): string
    {
        return '1111111111111111111111111111111111111';
    }
}


