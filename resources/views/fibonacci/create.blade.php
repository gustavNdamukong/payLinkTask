@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if ((session('fibonacciNumber') != "") || session('fibonacciNumber') === 0)
                <div class="card">
                    <div class="card-header">The fibonacci number of {{ session('original') }} is:</div>
                    <div class="card-body">
                        <h3 class="text-center">{{ session('fibonacciNumber') }}</h3>
                    </div>
                </div>
            @endif

            <div class="card">
                <div class="card-header">Pick a number to find its fibonacci sequence</div>
                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{ route('fibonacci.create') }}">
                        @csrf
                        {{ method_field('HEAD') }}
                        @include('fibonacci.partials.form')
                        <div class="form-group">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('rawJS')
    <script type="text/javascript">

        function showImgUpload(e)
        {
            e.preventDefault();
            document.getElementById('uploadImages').style.display = 'block';
        }
    </script>
@endsection
