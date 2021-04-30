<?php

namespace frontend\controllers;

use Yii;
use frontend\models\ApplyForm;
use yii\web\UploadedFile;

class AdmissionController extends \yii\web\Controller {

    public function actionTestimonial() {
        return $this->render('testimonial');
    }

    public function actionApply() {
        $model = new ApplyForm();

        if (Yii::$app->request->isPost) {
            $model->afile = UploadedFile::getInstance($model, 'afile');
            if ($model->upload()) {
                $model->sendEmail(Yii::$app->params['adminEmail']);
                return $this->render('apply-successful', ['model' => $model]);
            }
        }
        return $this->render('apply', ['model' => $model]);
    }

    public function actionApplyGeneral() {
        return $this->render('apply-general');
    }

    public function actionTransferReadmission() {
        return $this->render('transfer-readmission');
    }

}
