<?php

namespace console\controllers;

use yii\console\Controller;

class ConsoleGreatengsController extends Controller
{
    public function actionIndex()
    {
        echo 'Hello world!'.PHP_EOL;
        exit();
    }
}