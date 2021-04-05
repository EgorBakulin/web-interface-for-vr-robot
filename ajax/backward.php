<?php

require_once 'motorInit.php';

use PiPHP\GPIO\Pin\PinInterface;

$motors['right']['dir']->setValue(PinInterface::VALUE_HIGH);
$motors['left']['dir']->setValue(PinInterface::VALUE_HIGH);

$motors['right']['speed']->setValue(PinInterface::VALUE_HIGH);
$motors['left']['speed']->setValue(PinInterface::VALUE_HIGH);

sleep(1);

stopMotors($motors);

echo json_encode(array('success' => 1));
