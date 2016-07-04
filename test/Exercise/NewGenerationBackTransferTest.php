<?php


namespace PhpSchool\Php7WayTest\Exercise;

use PhpSchool\Php7Way\Exercise\NewGenerationTransfer;
use PhpSchool\PhpWorkshop\Exercise\ExerciseType;
use PhpSchool\PhpWorkshop\Solution\SolutionInterface;
use PhpSchool\PhpWorkshop\Check\FunctionRequirementsCheck;
use PhpSchool\PhpWorkshop\ExerciseDispatcher;
use PHPUnit_Framework_TestCase;

/**
 * Class NewGenerationTransferTest
 * @package PhpSchool\Php7WayTest\Exercise
 */
class NewGenerationTransferTest extends PHPUnit_Framework_TestCase
{
    public function testNewGenerationTransferExercise()
    {
        $e = new NewGenerationTransfer();
        $this->assertEquals('The new generation transfers its power', $e->getName());
        $this->assertEquals('Use generators delegating some parts of the algorithm', $e->getDescription());
        $this->assertEquals(ExerciseType::CLI, $e->getType());

        $this->assertEquals(["firstArgument", "secondArgument", "thirdArgument"], $e->getArgs());

        $this->assertInstanceOf(SolutionInterface::class, $e->getSolution());
        $this->assertFileExists(realpath($e->getProblem()));
        $this->assertNull($e->tearDown());
    }

    public function testFunctionRequirements()
    {
        $e = new NewGenerationTransfer();
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
        $e = new NewGenerationTransfer();
        $e->configure($dispatcher);
    }
}
