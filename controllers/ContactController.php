<?php

class ContactController extends BaseController
{
    protected $name = 'Contact';
    protected $receiver = 'geoffrey.cugnon@gmail.com';

    protected function sendMail()
    {
        if (!isset($_POST['submit']))
        {
            return 0;
        }

        $receiver = 'geoffrey.cugnon@gmail.com';
        $lastname = $_POST['lastname'];
        $firstname= $_POST['firstname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers = 'From: '.$lastname.' '.$firstname.' <'.$email.'>'.' <'.$phone.'>'."\r\n".'Reply-To:'.$email."\r\n".'Content-Type: text/plain; charset="utf-8"; DelSp="Yes"; format=flowed '."\r\n".
            'Content-Disposition: inline'."\r\n".'Content-Transfer-Encoding: 7bit'." \r\n".'X-Mailer:PHP/'.PHP_VERSION;

        if (mail($receiver, $message, $headers))
        {
            return 2;
        }

        return 1;
    }

    protected function getTemplateVars()
    {
        return array(
            'controller' => $this->name,
            'worked' => $this->sendMail(),
        );
    }


}