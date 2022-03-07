<?php

namespace App\Assessment;
require_once "../vendor/autoload.php";

use App\Assessment\Controller\fizzBuzzController;
use App\Assessment\Service\fizzBuzzService;

$numbers = range(1, 100);
$fizzBuzzService = new fizzBuzzService();
$FizzBuzzController = new fizzBuzzController($numbers, $fizzBuzzService);

$FizzBuzzController->insertItems();
$items = $FizzBuzzController->getItems();
foreach ($items as $item) {
    printf("%s \n", $item);
}
