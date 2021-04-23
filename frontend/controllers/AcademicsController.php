<?php

namespace frontend\controllers;

class AcademicsController extends \yii\web\Controller
{
    public function actionProgram()
    {
        return $this->render('program');
    }

//    Faculties
    public function actionFArts()
    {
        return $this->render('f-arts');
    }
    
    public function actionFScience()
    {
        return $this->render('f-science');
    }
    
    public function actionFBusiness()
    {
        return $this->render('f-business');
    }
    
    public function actionFEducation()
    {
        return $this->render('f-education');
    }
    
    public function actionFEngineering()
    {
        return $this->render('f-engineering');
    }
    
//    Degrees and Cost related
    public function actionGradCost() 
    {
        return $this->render('grad-cost');
    }
    
    public function actionUndergradCost() 
    {
        return $this->render('undergrad-cost');
    }
    public function actionPostgradCost() 
    {
        return $this->render('postgrad-cost');
    }
    public function actionOthersCost() 
    {
        return $this->render('others-cost');
    }
    public function actionFinancialAid() 
    {
        return $this->render('financial-aid');
    }
    
//    Additional Experiences
    public function actionInternshipJobs() 
    {
        return $this->render('internship-jobs');
    }
    public function actionBeyond() 
    {
        return $this->render('beyond');
    }
    
    public function actionJobStudent() 
    {
        return $this->render('job-student');
    }
    public function actionGraduateTa() 
    {
        return $this->render('graduate-ta');
    }

}
