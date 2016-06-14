<?php


namespace PhpSchool\Php7WayTest\Exercise;

use PhpSchool\Php7Way\Exercise\TypeYourArguments;
use PhpSchool\PhpWorkshop\Exercise\ExerciseType;
use PhpSchool\PhpWorkshop\Solution\SolutionInterface;
use PHPUnit_Framework_TestCase;

/**
 * Class ScalarTypeDeclarationsTest
 * @package PhpSchool\LearnYouPhpTest\Exercise
 */
class TypeYourArgumentsTest extends PHPUnit_Framework_TestCase
{
    public function testTypeYourArgumentsExercise()
    {
        $e = new TypeYourArguments();
        $this->assertEquals('Type your arguments!', $e->getName());
        $this->assertEquals('Type your arguments', $e->getDescription());
        $this->assertEquals(ExerciseType::CLI, $e->getType());

        $this->assertEquals([1, 2], $e->getArgs());

        $this->assertInstanceOf(SolutionInterface::class, $e->getSolution());
        $this->assertFileExists(realpath($e->getProblem()));
        $this->assertNull($e->tearDown());
    }
}
