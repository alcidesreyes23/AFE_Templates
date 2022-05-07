@extends('layouts.app')


@section('content')
    <div class="p-5" style="display: flex; justify-content: center">
        <div class="card shadow " style="width: 75%;">          
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <p class="card-text">{{$product->id}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-body">
                    <div style="display: flex; justify-content: center; gap:1rem;">
                        <!-- Submit button -->
                        <a type="button" class="btn btn-block mb-4" style="background-color: #F32424; color: white"
                            href="{{ route('product.index') }}">
                            <i class="fa-solid fa-backward"></i>
                            Atras
                        </a>
                        <a type="submit" class="btn btn-success btn-block mb-4" style="color: white"
                        href="{{ route('product.edit', $product) }}">
                            <i class="fa-solid fa-gear"></i>
                            Acciones
                        </a>
                    </div>
                </div>   
        </div>
    </div>
@endsection()
