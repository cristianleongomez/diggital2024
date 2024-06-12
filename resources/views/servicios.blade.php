@extends('layouts.app')

@section('title','Consultar servicios')

@section('content')
<div class='lista'>

    @foreach ($productos as $producto)
    <div class="card card-side bg-base-100 shadow-xl">
        <figure><img src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.jpg" alt="Movie"/></figure>
        <div class="card-body">
          <h2 class="card-title">cual es tu serie favorita!</h2>
          <p>Click the button to watch on Jetflix app.</p>
          <div class="card-actions justify-end">
            <button class="btn btn-primary">Watch</button>
          </div>
        </div>
      </div>
    @endforeach
</div>


@endsection