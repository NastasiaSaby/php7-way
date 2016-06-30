<?php

namespace PhpSchool\Php7Way\Exercise;

use PhpSchool\PhpWorkshop\Exercise\AbstractExercise;
use PhpSchool\PhpWorkshop\Exercise\CliExercise;
use PhpSchool\PhpWorkshop\Exercise\ExerciseInterface;
use PhpSchool\PhpWorkshop\Exercise\ExerciseType;
use PhpSchool\PhpWorkshop\ExerciseCheck\FunctionRequirementsExerciseCheck;
use PhpSchool\PhpWorkshop\ExerciseCheck\StdOutExerciseCheck;
use PhpSchool\PhpWorkshop\ExerciseDispatcher;

/**
 * Class ArrayWeFilter
 * @package PhpSchool\CallableFunctions\Exercise
 */
class NewGenerationBack extends AbstractExercise implements
    ExerciseInterface,
    CliExercise
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'The new generation is back';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return 'Use generators returning a value';
    }

    /**
     * @return array
     */
    public function getArgs()
    {
        return [1, 2, 3];
    }

    /**
     * @return ExerciseType
     */
    public function getType()
    {
        return ExerciseType::CLI();
    }
}
