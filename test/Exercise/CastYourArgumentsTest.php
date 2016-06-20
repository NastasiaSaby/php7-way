<?php


namespace PhpSchool\Php7WayTest\Exercise;

use PhpSchool\Php7Way\Exercise\CastYourArguments;
use PhpSchool\PhpWorkshop\Exercise\ExerciseType;
use PhpSchool\PhpWorkshop\Solution\SolutionInterface;
use PhpSchool\PhpWorkshop\ExerciseDispatcher;
use PhpSchool\PhpWorkshop\Check\FunctionRequirementsCheck;
use PHPUnit_Framework_TestCase;

/**
 * Class ScalarTypeDeclarationsTest
 * @package PhpSchool\LearnYouPhpTest\Exercise
 */
class CastYourArgumentsTest extends PHPUnit_Framework_TestCase
{
    public function testCastYourArgumentsExercise()
    {
        $e = new CastYourArguments();
        $this->assertEquals('Cast your arguments!', $e->getName());
        $this->assertEquals('Cast your arguments', $e->getDescription());
        $this->assertEquals(ExerciseType::CLI, $e->getType());

        $this->assertEquals([12, 8], $e->getArgs());

        $this->assertInstanceOf(SolutionInterface::class, $e->getSolution());
        $this->assertFileExists(realpath($e->getProblem()));
        $this->assertNull($e->tearDown());
    }

    public function testFunctionRequirements()
    {
        $e = new CastYourArguments();
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
        $e = new CastYourArguments();
        $e->configure($dispatcher);
    }
}
