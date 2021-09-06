<?php

namespace Tests\Feature;


use Tests\TestCase;
use App\Http\Controllers\FibonacciController;
use Exception;


class FibonacciControllerTest extends TestCase
{

    /** @test */
    public function its_returns_the_correct_fibonacci_of_a_given_number()
    {
        $fibonacci = new FibonacciController();

        $expected = 55;
        $actual = $fibonacci->Fibonacci(10);

        $this->assertEquals(
            $expected,
            $actual,
            "actual value is not equals to expected"
        );
    }
}
