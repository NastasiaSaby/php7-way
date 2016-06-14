<?php

namespace PhpSchool\Php7Way\Exercise;

use PhpSchool\PhpWorkshop\Check\FunctionRequirementsCheck;
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
class CastYourArguments extends AbstractExercise implements
    ExerciseInterface,
    CliExercise,
    FunctionRequirementsExerciseCheck
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'Cast your arguments!';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return 'Cast your arguments';
    }

    /**
     * @return array
     */
    public function getArgs()
    {
        return [1, 2];
    }

    /**
     * @return ExerciseType
     */
    public function getType()
    {
        return ExerciseType::CLI();
    }

    /**
     * @return string[]
     */
    public function getRequiredFunctions()
    {
        return [];
    }

    /**
     * @return string[]
     */
    public function getBannedFunctions()
    {
        return [];
    }

    /**
     * @param ExerciseDispatcher $dispatcher
     */
    public function configure(ExerciseDispatcher $dispatcher)
    {
        $dispatcher->requireCheck(FunctionRequirementsCheck::class);
    }
}
