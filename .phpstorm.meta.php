<?php

namespace PHPSTORM_META;

override(\Flasher\Prime\FlasherInterface::create(), map([
    'cli' => \Flasher\Cli\Prime\CliFactory::class
]));

override(\Flasher\Prime\FlasherInterface::using(), map([
    'cli' => \Flasher\Cli\Prime\CliFactory::class
]));
