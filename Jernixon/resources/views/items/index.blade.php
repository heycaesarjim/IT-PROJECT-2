@extends('layouts.navbar')

@section('left')
        <h1>Items under construction!</h1>
        <div class="input-group">
                <input class="form-control"
                        placeholder="I can help you to find anything you want!">
                <div class="input-group-addon" ><i class="fa fa-search"></i></div>
        </div>
<br>
<div class="row">
        <div class="col btn-group btn-group-lg ">
                <button type="button" class="btn btn-primary">Edit</button>
                <button type="button" class="btn btn-primary">Add</button>
                <button type="button" class="btn btn-primary">Subtract</button>
                <button type="button" class="btn btn-primary">Return</button>
        </div>
        <div class="col btn-group btn-group-lg pull-right">
                <button type="button" class="btn btn-success">Add new item</button>
                <button type="button" class="btn btn-danger">Remove item</button>
        </div>
</div>
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