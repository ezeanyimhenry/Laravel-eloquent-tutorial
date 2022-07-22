@extends('layouts.app')

@section('section')
    <div class="container">
        <div class="text-center">
            <h1 class="">
                Cars
            </h1>
        </div>

        <div>
            <a href="cars/create" class="btn btn-primary">Add a new car &rarr;</a>
        </div>

        <div>
            @foreach ($cars as $car)
            <div class="card">
                <div class="float-ight">
                    <a href="cars/{{ $car->id }}/edit" class="btn btn-primary">Edit &rarr;</a>
                </div>
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
            </div>
            
            @endforeach
        </div>
    </div>
@endsection