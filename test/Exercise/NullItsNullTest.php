<?php


namespace PhpSchool\Php7WayTest\Exercise;

use PhpSchool\Php7Way\Exercise\NullItsNull;
use PhpSchool\PhpWorkshop\Exercise\ExerciseType;
use PhpSchool\PhpWorkshop\Solution\SolutionInterface;
use PHPUnit_Framework_TestCase;

/**
 * Class NullItsNullTest
 * @package PhpSchool\Php7WayTest\Exercise
 */
class NullItsNullTest extends PHPUnit_Framework_TestCase
{
    public function testNullItsNullExercice()
    {
        $e = new NullItsNull();
        $this->assertEquals('Null, it\'s null!', $e->getName());
        $this->assertEquals('Use the null coalescing operator to check if the value is null', $e->getDescription());
        $this->assertEquals(ExerciseType::CLI, $e->getType());

        $this->assertEquals(["FirstArgument", "SecondArgument"], $e->getArgs());

        $this->assertInstanceOf(SolutionInterface::class, $e->getSolution());
        $this->assertFileExists(realpath($e->getProblem()));
        $this->assertNull($e->tearDown());
    }
}
