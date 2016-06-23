<?php


namespace PhpSchool\Php7WayTest\Exercise;

use PhpSchool\Php7Way\Exercise\MakeConstantYourArrays;
use PhpSchool\PhpWorkshop\Exercise\ExerciseType;
use PhpSchool\PhpWorkshop\Solution\SolutionInterface;
use PHPUnit_Framework_TestCase;

/**
 * Class ScalarTypeDeclarationsTest
 * @package PhpSchool\LearnYouPhpTest\Exercise
 */
class MakeConstantYourArraysTest extends PHPUnit_Framework_TestCase
{
    public function testMakeConstantYourArraysExercise()
    {
        $e = new MakeConstantYourArrays();
        $this->assertEquals('Make constant your arrays', $e->getName());
        $this->assertEquals('Define an array as constant', $e->getDescription());
        $this->assertEquals(ExerciseType::CLI, $e->getType());

        $this->assertEquals([1, 2], $e->getArgs());

        $this->assertInstanceOf(SolutionInterface::class, $e->getSolution());
        $this->assertFileExists(realpath($e->getProblem()));
        $this->assertNull($e->tearDown());
    }
}