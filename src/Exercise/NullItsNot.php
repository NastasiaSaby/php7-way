<?php

namespace PhpSchool\Php7Way\Exercise;

use PhpSchool\PhpWorkshop\Exercise\AbstractExercise;
use PhpSchool\PhpWorkshop\Exercise\CliExercise;
use PhpSchool\PhpWorkshop\Exercise\ExerciseInterface;
use PhpSchool\PhpWorkshop\Exercise\ExerciseType;
use PhpSchool\PhpWorkshop\ExerciseCheck\StdOutExerciseCheck;

/**
 * Class ArrayWeFilter
 * @package PhpSchool\CallableFunctions\Exercise
 */
class NUllItsNot extends AbstractExercise implements
    ExerciseInterface,
    CliExercise
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'Null, it\'s not!';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return 'Use the null coalescing operator to check if the value exists';
    }

    /**
     * @return array
     */
    public function getArgs()
    {
        return ["FirstArgument"];
    }

    /**
     * @return ExerciseType
     */
    public function getType()
    {
        return ExerciseType::CLI();
    }
}
