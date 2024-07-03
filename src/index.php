<?php

use Symfony\Component\Clock\NativeClock;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$clock = new NativeClock();
echo $clock->now()->format("c\n");
