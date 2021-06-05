<?php

require_once '../vendor/autoload.php';
use PiPHP\GPIO\GPIO;
use PiPHP\GPIO\Pin\PinInterface;

function stopMotors($motors) {
    foreach($motors as $side) {
        foreach($side as $motor) {
            $motor->setValue(PinInterface::VALUE_LOW);
        }
    }
}

$gpio = new GPIO();

$motors = ['right' => ['dir' => $gpio->getOutputPin(19),
                            'speed' => $gpio->getOutputPin(16)],

           'left'  => ['dir' => $gpio->getOutputPin(26),
                            'speed' => $gpio->getOutputPin(20)]];

