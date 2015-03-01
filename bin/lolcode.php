#!/usr/bin/env php
<?php

require __DIR__ . '/../vendor/autoload.php';

use DMS\LOL\Command\LolCodeCommand;
use Symfony\Component\Console\Application;

$application = new Application();
$application->add(new LolCodeCommand());
$application->run();
