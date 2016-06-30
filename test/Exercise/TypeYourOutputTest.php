<?php


namespace PhpSchool\Php7WayTest\Exercise;

use PhpSchool\Php7Way\Exercise\TypeYourOutput;
use PhpSchool\PhpWorkshop\Exercise\ExerciseType;
use PhpSchool\PhpWorkshop\Check\FunctionRequirementsCheck;
use PhpSchool\PhpWorkshop\Solution\SolutionInterface;
use PhpSchool\PhpWorkshop\ExerciseDispatcher;
use PHPUnit_Framework_TestCase;

/**
 * Class ScalarTypeDeclarationsTest
 * @package PhpSchool\LearnYouPhpTest\Exercise
 */
class TypeYourOutputTest extends PHPUnit_Framework_TestCase
{
    public function testTypeYourOutputExercise()
    {
        $e = new TypeYourOutput();
        $this->assertEquals('Type your output!', $e->getName());
        $this->assertEquals('Use types to validate the output of a function', $e->getDescription());
        $this->assertEquals(ExerciseType::CLI, $e->getType());

        $this->assertEquals([1, 2], $e->getArgs());

        $this->assertInstanceOf(SolutionInterface::class, $e->getSolution());
        $this->assertFileExists(realpath($e->getProblem()));
        $this->assertNull($e->tearDown());
    }

    public function testFunctionRequirements()
    {
        $e = new TypeYourOutput();
        $this->assertEquals(['noStrictFunction', 'strictFunction'], $e->getRequiredFunctions());
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
        $e = new TypeYourOutput();
        $e->configure($dispatcher);
    }
}
