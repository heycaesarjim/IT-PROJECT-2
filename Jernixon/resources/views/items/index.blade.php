@extends('layouts.navbar')

@section('left')
        <h1>Items under construction!</h1>
        
        @if(count($products) > 1)
                @foreach ($products as $product)
                        <div class="well">
                                <h3>{{$product->description}}</h3>
                        </div>
                @endforeach
        @else
                <h5>No items</h5>
        @endif

      
@endsection