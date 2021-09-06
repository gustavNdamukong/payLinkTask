<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FibonacciController extends Controller
{

    public function index()
    {
        return view('fibonacci.create');
    }

    public function show()
    {

    }

    public function create(Request $request)
    {
        //validation
        $validator = Validator::make($request->all(), [
            'number' => 'required',
        ]);

        if ($validator->fails())
        {
            return redirect('/fibonacci')
                ->withErrors($validator)
                ->withInput();
        }

        $original = $request->number;
        $fibonacciNumber = $this->fibonacci($original);
        return redirect()->to('/fibonacci')->with(['original' => $original, 'fibonacciNumber' => $fibonacciNumber]);
    }

    public function store()
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

    public function Fibonacci(int $num) : int
    {
        if($num == 0) {
            return 0;
        }
        elseif($num == 1)
        {
            return 1;
        }

        return($this->fibonacci($num -1) + $this->fibonacci( $num -2));
    }

}
