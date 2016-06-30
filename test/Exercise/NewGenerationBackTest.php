<?php


namespace PhpSchool\Php7WayTest\Exercise;

use PhpSchool\Php7Way\Exercise\NewGenerationBack;
use PhpSchool\PhpWorkshop\Exercise\ExerciseType;
use PhpSchool\PhpWorkshop\Solution\SolutionInterface;
use PHPUnit_Framework_TestCase;

/**
 * Class ScalarTypeDeclarationsTest
 * @package PhpSchool\LearnYouPhpTest\Exercise
 */
class NewGenerationBackTest extends PHPUnit_Framework_TestCase
{
    public function testNewGenerationBackExercise()
    {
        $e = new NewGenerationBack();
        $this->assertEquals('The new generation is back', $e->getName());
        $this->assertEquals('Use generators returning a value', $e->getDescription());
        $this->assertEquals(ExerciseType::CLI, $e->getType());

        $this->assertEquals([1, 2, 3], $e->getArgs());

        $this->assertInstanceOf(SolutionInterface::class, $e->getSolution());
        $this->assertFileExists(realpath($e->getProblem()));
        $this->assertNull($e->tearDown());
    }
}
