<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Http\Controllers\FizzBuzzController;



class FizzBuzzControllerTest extends TestCase
{
    /** @test */
    public function returns_true_when_divisible_by_three()
    {
        $fizzBuzzController = new FizzBuzzController();

        $assertvalue = $fizzBuzzController->divisibleByThree(3);

        $this->assertTrue(
            $assertvalue,
            "assert value is true or not"
        );
    }

    /** @test */
    public function returns_true_when_divisible_by_five()
    {
        $fizzBuzzController = new FizzBuzzController();

        $assertvalue = $fizzBuzzController->divisibleByFive(5);

        $this->assertTrue(
            $assertvalue,
            "assert value is true or not"
        );
    }

    /** @test */
    public function returns_true_when_divisible_by_three_and_five()
    {
        $fizzBuzzController = new FizzBuzzController();

        $assertvalue = $fizzBuzzController->divisibleByThreeAndFive(15);

        $this->assertTrue(
            $assertvalue,
            "assert value is true or not"
        );
    }


}
