<?php

namespace PhpSchool\Php7Way\Exercise;

use PhpSchool\PhpWorkshop\Exercise\AbstractExercise;
use PhpSchool\PhpWorkshop\Exercise\CliExercise;
use PhpSchool\PhpWorkshop\Exercise\ExerciseInterface;
use PhpSchool\PhpWorkshop\Exercise\ExerciseType;

/**
 * Class NullItsNull
 * @package PhpSchool\Php7Way\Exercise
 */
class NullItsNull extends AbstractExercise implements
    ExerciseInterface,
    CliExercise
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'Null, it\'s null!';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return 'Use the null coalescing operator to check if the value is null';
    }

    /**
     * @return array
     */
    public function getArgs()
    {
        return ["FirstArgument", "SecondArgument"];
    }

    /**
     * @return ExerciseType
     */
    public function getType()
    {
        return ExerciseType::CLI();
    }
}
