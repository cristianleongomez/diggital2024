@extends('layouts.app')

@section('title','Consultar productos')

@section('content')


   <div class='lista'>
        @foreach ($productos as $producto)
            <div class="card w-96 bg-base-100 shadow-xl">
              <figure><img src="{{ $producto['imagen'] }}" alt="Shoes" /></figure>
              <div class="card-body">
                  <h2 class="card-title">
                    <div class="badge badge-secondary">NEW</div>
                  </h2>
                  <p>tus zapatillas favoritas?</p>
                  <div class="card-actions justify-end">
                    <div class="badge badge-outline">{{ $producto['nombre'] }}</div>
                    <div class="badge badge-outline">Products</div>
                  </div>
                </div>
           </div>
        @endforeach
   </div>


@endsection
