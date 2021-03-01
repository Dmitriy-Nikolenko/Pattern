<?php
require 'Candidate.php';
require 'HeadHunter.php';
require 'IObserverable.php';
require 'IObserver.php';

$observer = new HeadHunter();

$candidate = new Candidate('Roma', 'Roma@mail.ru', 10);
$candidate1 = new Candidate('Tanya', 'Tanya@mail.ru', 7);
$candidate2 = new Candidate('Igor', 'Igor@mail.ru', 2);

$candidate->addObserver($observer);
$candidate1->addObserver($observer);
$candidate2->addObserver($observer);

$candidate2->removeObserver($observer);

$candidate->notify();
$candidate1->notify();





