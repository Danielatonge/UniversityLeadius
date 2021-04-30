<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $fname;
    public $lname;
    public $email;
    public $tel;
    public $body;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['fname', 'email', 'tel', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email']
        ];
    }


    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom($this->email)
            ->setReplyTo([$this->email => $this->fname . ' '. $this->lname])
            ->setSubject("Contact Us Form: Leadius International University")
            ->setTextBody($this->tel . "\n" .$this->body)
            ->send();
    }
}
