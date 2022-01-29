<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples;

require_once __DIR__ . '/../vendor/autoload.php';

use Sourabh\DesignPrinciples\Creational\Builder\Client as BuilderRunner;
use Sourabh\DesignPrinciples\Creational\FactoryMethod\Client as FactoryMethodRunner;
use Sourabh\DesignPrinciples\Creational\SimpleFactory\Client as SimpleFactoryRunner;
use Sourabh\DesignPrinciples\Creational\Singleton\Client as SingletonRunner;
use Sourabh\DesignPrinciples\LiskovSubstitution\Runner as LiskovSubstitutionRunner;
use Sourabh\DesignPrinciples\SRP\Runner as SRPRunner;

$runners = [
    new SRPRunner(),
    new LiskovSubstitutionRunner(),
    new BuilderRunner(),
    new SimpleFactoryRunner(),
    new FactoryMethodRunner(),
    new SingletonRunner(),
];

/** @var RunnerInterface $runner */
foreach ($runners as $runner) {
    echo PHP_EOL;
    $runner->run();
    echo PHP_EOL;
}
