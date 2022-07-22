@extends('layouts.app')

@section('section')
    <div class="m-auto">
        <div class="text-center">
            <h1 class="">
                cars
            </h1>
        </div>

        <div>
            <a href="cars/create" class="btn btn-primary">Add a new car &rarr;</a>
        </div>

        <div>
            @foreach ($cars as $car)
            <span>
                Founder: {{ $car->founded }}
            </span>
            <h2>
                {{ $car->name }}
            </h2>
            <p>
                {{ $car->description }}
            </p>
            <hr class="mt-4 mb-4">
            @endforeach
        </div>
    </div>
@endsection