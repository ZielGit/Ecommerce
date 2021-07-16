@extends('layouts.app');

@section('content')
<div class="container">
    <div class="card">
        <header>
            <h4>Crear nuevo producto</h4>

            <div class="card-body">
                @include('products.form')
            </div>
        </header>
    </div>
</div>
@endsection