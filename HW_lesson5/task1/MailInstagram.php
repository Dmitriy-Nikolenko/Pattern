<?php


class MailInstagram implements Mail
{
    protected Mail $objMail;

    /**
     * MailVk constructor.
     * @param Mail $objMail
     */
    public function __construct( Mail $objMail)
    {
        $this->objMail = $objMail;
    }


    public function send()
    {
        echo "Instagram ";
        $this->objMail->send();
    }
}