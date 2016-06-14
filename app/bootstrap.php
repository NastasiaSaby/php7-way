<?php

ini_set('display_errors', 1);
date_default_timezone_set('Europe/London');
switch (true) {
    case (file_exists(__DIR__ . '/../vendor/autoload.php')):
        // Installed standalone
        require __DIR__ . '/../vendor/autoload.php';
        break;
    case (file_exists(__DIR__ . '/../../../autoload.php')):
        // Installed as a Composer dependency
        require __DIR__ . '/../../../autoload.php';
        break;
    case (file_exists('vendor/autoload.php')):
        // As a Composer dependency, relative to CWD
        require 'vendor/autoload.php';
        break;
    default:
        throw new RuntimeException('Unable to locate Composer autoloader; please run "composer install".');
}

use PhpSchool\PhpWorkshop\Application;
use PhpSchool\Php7Way\Exercise\TypeYourArguments;
use PhpSchool\Php7Way\Exercise\CastYourArguments;
use PhpSchool\Php7Way\Exercise\TypeYourOutput;
use PhpSchool\Php7Way\Exercise\NullItsNull;
use PhpSchool\Php7Way\Exercise\ABeautifulSpaceship;
use PhpSchool\Php7Way\Exercise\DivideIt;
use PhpSchool\Php7Way\Exercise\NewGeneration;
use PhpSchool\Php7Way\Exercise\NewGenerationBack;
use PhpSchool\Php7Way\Exercise\NewGenerationTransfer;
use PhpSchool\Php7Way\Exercise\MakeConstantYourArrays;

$app = new Application('PHP7 way', __DIR__ . '/config.php');

$app->addExercise(TypeYourArguments::class);
$app->addExercise(CastYourArguments::class);
$app->addExercise(TypeYourOutput::class);
$app->addExercise(NullItsNull::class);
$app->addExercise(ABeautifulSpaceship::class);
$app->addExercise(DivideIt::class);
$app->addExercise(NewGeneration::class);
$app->addExercise(NewGenerationBack::class);
$app->addExercise(NewGenerationTransfer::class);
$app->addExercise(MakeConstantYourArrays::class);

$art = <<<ART
      ______
           /
       __ /
         /
        /
    PHP SCHOOL
PLAYING WITH PHP7
ART;

$app->setLogo($art);
$app->setFgColour('green');
$app->setBgColour('black');

return $app;
