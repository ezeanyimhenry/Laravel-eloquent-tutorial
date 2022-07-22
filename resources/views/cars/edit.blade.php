@extends('layouts.app')

@section('section')
    <div class="container">
        <div class="text-center">
            <h1 class="">
                Update Car
            </h1>
        </div>

        <div class="p-5">
           <form action="/cars/{{ $car->id }}" method="POST" class="form">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Brand name</label>
                <input type="text" class="form-control input-lg" name="name" value="{{ $car->name }}">
            </div>
            <div class="form-group">
                <label for="founded">Founded</label>
                <input type="text" class="form-control input-lg" name="founded" value="{{ $car->founded }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control input-lg"  name="description" id="" cols="30" rows="10">{{ $car->description }}</textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
            
           </form>
        </div>
    </div>
@endsection