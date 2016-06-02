<?php


namespace PhpSchool\Php7WayTest\Exercise;

use PhpSchool\Php7Way\Exercise\ScalarTypeDeclarations;
use PhpSchool\PhpWorkshop\Exercise\ExerciseType;
use PhpSchool\PhpWorkshop\Solution\SolutionInterface;
use PHPUnit_Framework_TestCase;

/**
 * Class ScalarTypeDeclarationsTest
 * @package PhpSchool\LearnYouPhpTest\Exercise
 */
class ScalarTypeDeclarationsTest extends PHPUnit_Framework_TestCase
{
    public function testScalarTypeDeclarationsExercise()
    {
        $e = new ScalarTypeDeclarations();
        $this->assertEquals('Scalar type declarations!', $e->getName());
        $this->assertEquals('Scalar type declarations', $e->getDescription());
        $this->assertEquals(ExerciseType::CLI, $e->getType());

        $this->assertEquals([1, 'A string'], $e->getArgs());

        $this->assertInstanceOf(SolutionInterface::class, $e->getSolution());
        $this->assertFileExists(realpath($e->getProblem()));
        $this->assertNull($e->tearDown());
    }
}
