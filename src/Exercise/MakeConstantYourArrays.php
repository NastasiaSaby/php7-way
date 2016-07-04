<?php

namespace PhpSchool\Php7Way\Exercise;

use PhpSchool\PhpWorkshop\Exercise\AbstractExercise;
use PhpSchool\PhpWorkshop\Exercise\CliExercise;
use PhpSchool\PhpWorkshop\Exercise\ExerciseInterface;
use PhpSchool\PhpWorkshop\Exercise\ExerciseType;

/**
 * Class MakeConstantYourArrays
 * @package PhpSchool\Php7Way\Exercise
 */
class MakeConstantYourArrays extends AbstractExercise implements
    ExerciseInterface,
    CliExercise
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'Make constant your arrays';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return 'Define an array as constant';
    }

    /**
     * @return array
     */
    public function getArgs()
    {
        return ['A', 'B', 'C'];
    }

    /**
     * @return ExerciseType
     */
    public function getType()
    {
        return ExerciseType::CLI();
    }
}
