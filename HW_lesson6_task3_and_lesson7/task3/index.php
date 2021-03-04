<?php
require 'Command.php';
require 'Copy.php';
require 'CopyCommand.php';
require 'Cut.php';
require 'CutCommand.php';
require 'Paste.php';
require 'PasteCommand.php';
require 'User.php';
require 'Editor.php';

$user = new User();

$user->editor('copy', 'Privet');
$user->editor('cut', 'Hi');
$user->editor('paste', 'Hi');