<?php

namespace App\Assessment\Controller;


use App\Assessment\Contract\fizzBuzzControllerContract;

/**
 *
 */
class fizzBuzzController implements fizzBuzzControllerContract
{
    /**
     * @var
     */
    private $numbers;
    /**
     * @var array
     */
    private $items = [];
    /**
     * @var
     */
    private $fizzBuzzService;

    /**
     * @param $numbers
     * @param $fizzBuzzService
     */
    public function __construct($numbers, $fizzBuzzService)
    {
        $this->numbers = $numbers;
        $this->fizzBuzzService = $fizzBuzzService;
    }

    /**
     * @return void
     */
    public function insertItems(): void
    {
        foreach( $this->numbers as $number ) {
            $this->items[] = $this->fizzBuzzService->manipulate($number);
        }
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

}