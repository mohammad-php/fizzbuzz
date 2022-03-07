<?php

namespace App\Assessment\Contract;

interface fizzBuzzControllerContract
{
    /**
     * @param $numbers
     * @param $fizzBuzzService
     */
    public function __construct($numbers, $fizzBuzzService);

    /**
     * @return void
     */
    public function insertItems(): void;

    /**
     * @return array
     */
    public function getItems(): array;
}