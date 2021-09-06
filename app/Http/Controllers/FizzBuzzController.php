<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FizzBuzzController extends Controller
{
    private $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

    public function index()
    {

        for ($i = 0; $i < count($this->numbers); $i++)
        {
            if ($this->divisibleByThreeAndFive($this->numbers[$i]))
            {
                $this->numbers[$i] = 'FizzBuzz';
            }
            elseif ($this->divisibleByThree($this->numbers[$i]))
            {
                $this->numbers[$i] = 'Fizz';
            }
            elseif ($this->divisibleByFive($this->numbers[$i]))
            {
                $this->numbers[$i] = 'Buzz';
            }
        }

        $numbers = $this->numbers;

        return view('fizzy', compact('numbers'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
    
    public function divisibleByThree(int $number) : bool
    {
        return (($number % 3 == 0) && ($number % 5 != 0)) ? true : false;
    }

    public function divisibleByFive(int $number) : bool
    {
        return (($number % 5 == 0) && ($number % 3 != 0)) ? true : false;
    }

    public function divisibleByThreeAndFive(int $number) : bool
    {
        return (($number % 3 == 0) && ($number % 5 == 0)) ? true : false;
    }

}
