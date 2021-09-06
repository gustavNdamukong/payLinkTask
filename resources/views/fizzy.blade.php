@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="btn-group float-right" role="group">
                            <a href="{{ url('home') }}" class="btn btn-success">Home</a>
                        </div>
                        <h2>
                            FizzBuzz
                        </h2>

                    </div>

                    <div class="card-body responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Numbers</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($numbers as $key => $number)
                                <tr>
                                    <td>{{ ($key + 1) }}</td>
                                    <td>{{ $number }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection