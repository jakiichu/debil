<?php

namespace app\controllers;

class ApiController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = false;
        return $this->render('index');
    }

    public function actionManufacturer()
    {
        $this->layout = false;
        return $this->render('manufacturer');
    }

    public function actionMaterial()
    {
        $this->layout = false;
        return $this->render('material');
    }

    public function actionSeason()
    {
        $this->layout = false;
        return $this->render('season');
    }
    public function actionCategory()
    {
        $this->layout = false;
        return $this->render('category');
    }
}
