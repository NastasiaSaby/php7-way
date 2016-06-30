<?php


namespace PhpSchool\Php7WayTest\Exercise;

use PhpSchool\Php7Way\Exercise\NewGeneration;
use PhpSchool\PhpWorkshop\Exercise\ExerciseType;
use PhpSchool\PhpWorkshop\Solution\SolutionInterface;
use PhpSchool\PhpWorkshop\Check\FunctionRequirementsCheck;
use PhpSchool\PhpWorkshop\ExerciseDispatcher;
use PHPUnit_Framework_TestCase;

/**
 * Class ScalarTypeDeclarationsTest
 * @package PhpSchool\LearnYouPhpTest\Exercise
 */
class NewGenerationTest extends PHPUnit_Framework_TestCase
{
    public function testNewGenerationExercise()
    {
        $e = new NewGeneration();
        $this->assertEquals('A new generation is coming', $e->getName());
        $this->assertEquals('Develop a generator and use it', $e->getDescription());
        $this->assertEquals(ExerciseType::CLI, $e->getType());

        $this->assertEquals(["firstArgument", "secondArgument", "thirdArgument"], $e->getArgs());

        $this->assertInstanceOf(SolutionInterface::class, $e->getSolution());
        $this->assertFileExists(realpath($e->getProblem()));
        $this->assertNull($e->tearDown());
    }

    public function testFunctionRequirements()
    {
        $e = new NewGeneration();
        $this->assertEquals(['strtoupper'], $e->getRequiredFunctions());
        $this->assertEquals([], $e->getBannedFunctions());
    }
    public function testConfigure()
    {
        $dispatcher = $this->getMockBuilder(ExerciseDispatcher::class)
            ->disableOriginalConstructor()
            ->getMock();
        $dispatcher
            ->expects($this->once())
            ->method('requireCheck')
            ->with(FunctionRequirementsCheck::class);
        $e = new NewGeneration();
        $e->configure($dispatcher);
    }
}
