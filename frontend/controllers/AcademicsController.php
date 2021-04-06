<?php

namespace frontend\controllers;

class AcademicsController extends \yii\web\Controller
{
    public function actionProgram()
    {
        return $this->render('program');
    }

    public function actionDepartment()
    {
        return $this->render('department');
    }

}
