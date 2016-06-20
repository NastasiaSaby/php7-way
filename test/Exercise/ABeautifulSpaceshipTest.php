<?php


namespace PhpSchool\Php7WayTest\Exercise;

use PhpSchool\Php7Way\Exercise\ABeautifulSpaceship;
use PhpSchool\PhpWorkshop\Exercise\ExerciseType;
use PhpSchool\PhpWorkshop\Solution\SolutionInterface;
use PHPUnit_Framework_TestCase;

/**
 * Class ScalarTypeDeclarationsTest
 * @package PhpSchool\LearnYouPhpTest\Exercise
 */
class ABeautifulSpaceshipTest extends PHPUnit_Framework_TestCase
{
    public function testABeautifulSpaceshipExercice()
    {
        $e = new ABeautifulSpaceship();
        $this->assertEquals('A beautiful spaceship', $e->getName());
        $this->assertEquals('Beautiful spaceship', $e->getDescription());
        $this->assertEquals(ExerciseType::CLI, $e->getType());

        $this->assertEquals([1, 2, "a", "b", 1.5, 2.5], $e->getArgs());

        $this->assertInstanceOf(SolutionInterface::class, $e->getSolution());
        $this->assertFileExists(realpath($e->getProblem()));
        $this->assertNull($e->tearDown());
    }
}
