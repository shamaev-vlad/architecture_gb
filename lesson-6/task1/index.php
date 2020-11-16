<?php
require_once 'Vacancy.php';
require_once 'IVacancy.php';
require_once 'PHPVacancy.php';
require_once 'JAVAVacancy.php';
require_once 'Applicant.php';
require_once 'OneApplicant.php';


$php_vacancy = new PHPVacancy();
$java_vacancy = new JAVAVacancy();

$Applicant1 = new OneApplicant("Иван", "exp@mail.ru", 0);
$Applicant2 = new OneApplicant("Пётр", "exp22@mail.ru", 4);



$Applicant2->subscribe($java_vacancy);

$php_vacancy->updateVacancies();
$java_vacancy->updateVacancies();

echo "=============================". PHP_EOL;
