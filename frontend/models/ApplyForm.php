<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

/**
 * ContactForm is the model behind the contact form.
 */
class ApplyForm extends Model
{
    public $afile;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
         return [
            [['afile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'pdf, docx'],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->afile->saveAs('files/' . $this->afile->baseName . '.' . $this->afile->extension);
            return true;
        } else {
            return false;
        }
    }
    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail($email)
    {   
        $path = 'files/' . $this->afile->baseName . '.' . $this->afile->extension;
        echo '<script>console.log("' . $path . '");</script>';
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom("noreply@leadius.org")
            ->setReplyTo("noreply@leadius.org")
            ->setSubject("Application for Admission")
            ->attach('files/' . $this->afile->baseName . '.' . $this->afile->extension)
            ->send();
    }
}
