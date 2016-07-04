<?php


namespace PhpSchool\Php7WayTest\Exercise;

use PhpSchool\Php7Way\Exercise\DivideIt;
use PhpSchool\PhpWorkshop\Exercise\ExerciseType;
use PhpSchool\PhpWorkshop\Solution\SolutionInterface;
use PHPUnit_Framework_TestCase;
use PhpSchool\PhpWorkshop\ExerciseDispatcher;
use PhpSchool\PhpWorkshop\Check\FunctionRequirementsCheck;

/**
 * Class DivideItTest
 * @package PhpSchool\Php7WayTest\Exercise
 */
class DivideItTest extends PHPUnit_Framework_TestCase
{
    public function testDivideItExercice()
    {
        $e = new DivideIt();
        $this->assertEquals('Divide it', $e->getName());
        $this->assertEquals('Divide a number by another', $e->getDescription());
        $this->assertEquals(ExerciseType::CLI, $e->getType());

        $this->assertEquals([4, 3], $e->getArgs());

        $this->assertInstanceOf(SolutionInterface::class, $e->getSolution());
        $this->assertFileExists(realpath($e->getProblem()));
        $this->assertNull($e->tearDown());
    }

    public function testFunctionRequirements()
    {
        $e = new DivideIt();
        $this->assertEquals(['intdiv'], $e->getRequiredFunctions());
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
        $e = new DivideIt();
        $e->configure($dispatcher);
    }
}
