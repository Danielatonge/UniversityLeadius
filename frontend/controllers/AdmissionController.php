<?php

namespace frontend\controllers;

class AdmissionController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionTestimonial()
    {
        return $this->render('testimonial');
    }
    
    public function actionApplyGeneral()
    {
        return $this->render('apply-general');
    }
    
    public function actionTransferReadmission()
    {
        return $this->render('transfer-readmission');
    }

}
