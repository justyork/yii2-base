<?php
/**
 * Created by PhpStorm.
 * User: York
 * Date: 16.10.2017
 * Time: 16:50
 */

namespace justyork\yii2_base\cms\controllers;


use yii\console\Controller;

class InstallController extends Controller
{

    public function actionIndex(){
        $this->stdout("Welcome to JustYork CMS installation\n\n");

    }
}