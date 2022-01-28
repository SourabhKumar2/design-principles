<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples;

require_once __DIR__ . '/../vendor/autoload.php';

use Sourabh\DesignPrinciples\Creational\Builder\Client as BuilderRunner;
use Sourabh\DesignPrinciples\LiskovSubstitution\Runner as LiskovSubstitutionRunner;
use Sourabh\DesignPrinciples\SRP\Runner as SRPRunner;

$runners = [
    new SRPRunner(),
    new LiskovSubstitutionRunner(),
    new BuilderRunner(),
];

/** @var RunnerInterface $runner */
foreach ($runners as $runner) {
    echo PHP_EOL;
    $runner->run();
    echo PHP_EOL;
}
