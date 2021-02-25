<?php
require 'Mail.php';
require 'MailBase.php';
require 'MailFacebook.php';
require 'MailInstagram.php';
require 'MailOk.php';
require 'MailVk.php';

$sendText = new MailBase();
$sendText = new MailVk($sendText);
$sendText = new MailOk($sendText);
$sendText = new MailFacebook($sendText);
$sendText = new MailInstagram($sendText);
$sendText->send();