@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="">
            <products-component></products-component>
        </div>
        
        <div class="d-flex justify-content-center">
            {{$products->links()}}
        </div>
    </div>
@endsection