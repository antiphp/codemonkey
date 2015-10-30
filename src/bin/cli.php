<?php
/**
 * terminal script
 */

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;
use Antiphp\Codemonkey\Generator\GenerateCommand;

require __DIR__ . '/../vendor/autoload.php';

$application = new Application();
$application->add(new GenerateCommand());
$application->run();