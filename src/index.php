<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples;

require_once __DIR__ . '/../vendor/autoload.php';

$runners = [
];

/** @var RunnerInterface $runner */
foreach ($runners as $runner) {
    echo PHP_EOL;
    $runner->run();
    echo PHP_EOL;
}
