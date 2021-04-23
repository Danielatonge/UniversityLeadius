<?php

namespace frontend\controllers;

class CampusLifeController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionHealthSafety()
    {
        return $this->render('health-safety');
    }
    public function actionFeedHouse()
    {
        return $this->render('feed-house');
    }
    public function actionGalleryGeneral()
    {
        return $this->render('gallery-general');
    }
    public function actionActivities()
    {
        return $this->render('activities');
    }
    public function actionCovid19()
    {
        return $this->render('covid-19');
    }

}
