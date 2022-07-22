@extends('layouts.app')

@section('section')
    <div class="container">
        <div class="text-center">
            <h1 class="">
                Create Car
            </h1>
        </div>

        <div class="p-5">
           <form action="/cars" method="POST" class="form">
            @csrf
            <div class="form-group">
                <label for="name">Brand name</label>
                <input type="text" class="form-control input-lg" name="name" placeholder="Brand name...">
            </div>
            <div class="form-group">
                <label for="founded">Founded</label>
                <input type="text" class="form-control input-lg" name="founded" placeholder="founded year...">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control input-lg"  name="description" id="" cols="30" rows="10">Description...</textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
            
           </form>
        </div>
    </div>
@endsection