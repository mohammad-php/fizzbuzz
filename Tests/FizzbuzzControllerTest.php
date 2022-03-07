<?php
namespace Tests;

use App\Assessment\Controller\fizzBuzzController;
use App\Assessment\Service\fizzBuzzService;
use PHPUnit\Framework\TestCase;

class FizzbuzzControllerTest extends TestCase
{
    /**
     * @return void
     */
    public function testCanFizzBuzzDataType(): void
    {
        $numbers = range(1, 100);
        $fizzBuzzService = new fizzBuzzService();
        $FizzBuzzController = new fizzBuzzController($numbers, $fizzBuzzService);
        $FizzBuzzController->insertItems();
        $items = $FizzBuzzController->getItems();
        foreach($items as $item)
        {
            $this->assertIsString($item);
        }
        $this->assertIsArray($items);

        require_once '../fizzBuzzData.php';
        $this->assertEquals(array_values($fizzBuzzData), array_values($items));

    }

}


