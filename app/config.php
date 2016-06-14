<?php

use function DI\factory;
use function DI\object;
use PhpSchool\Php7Way\Exercise\CastYourArguments;
use PhpSchool\Php7Way\Exercise\TypeYourArguments;
use PhpSchool\Php7Way\Exercise\TypeYourOutput;
use PhpSchool\Php7Way\Exercise\NullItsNull;
use PhpSchool\Php7Way\Exercise\ABeautifulSpaceship;
use PhpSchool\Php7Way\Exercise\DivideIt;
use PhpSchool\Php7Way\Exercise\NewGeneration;
use PhpSchool\Php7Way\Exercise\NewGenerationBack;
use PhpSchool\Php7Way\Exercise\NewGenerationTransfer;
use PhpSchool\Php7Way\Exercise\MakeConstantYourArrays;

return [
    TypeYourArguments::class   => object(TypeYourArguments::class),
    CastYourArguments::class   => object(CastYourArguments::class),
    TypeYourOutput::class   => object(TypeYourOutput::class),
    NullItsNull::class   => object(NullItsNull::class),
    ABeautifulSpaceship::class   => object(ABeautifulSpaceship::class),
    DivideIt::class   => object(DivideIt::class),
    NewGeneration::class   => object(NewGeneration::class),
    NewGenerationBack::class   => object(NewGenerationBack::class),
    NewGenerationTransfer::class   => object(NewGenerationTransfer::class),
    MakeConstantYourArrays::class   => object(MakeConstantYourArrays::class),
];
