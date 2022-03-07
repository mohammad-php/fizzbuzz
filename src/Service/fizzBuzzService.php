<?php

namespace App\Assessment\Service;

class fizzBuzzService
{
    /**
     * @param int $number
     * @return string
     */
    public function manipulate(int $number): string
    {
        if ( !fmod($number, 3) && !fmod($number, 5) ):
            return 'FizzBuzz';
        elseif ( !fmod($number, 5) ):
            return 'Buzz';
        elseif ( !fmod($number, 3) ):
            return 'Fizz';
        else:
            return (string) $number;
        endif;
    }
}