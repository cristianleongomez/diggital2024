@extends('layouts.app')
@section('title','consultar productos')
@section('cabecera','crear producto')

@section('contenido')
    <div class='flex justify-center my-6'>
        <div class='card w-96 shadow-2x1 bg-base-100'>
            <div class='card-body'>
                {{--Formulario para crear un producto--}}
                <form action="{{ route('productos.store')}}" method='POST'>
                    @csrf
                    {{-- NOMBRE --}}
                    <div>
                        <label for='nombre' class='label'>nombre</label>
                        <input type='text' name='nombre' id='nombre' class='input input-bordered'placeholder='nombre del producto' requiered/>
                    </div>
                    {{-- descripcion--}}
                    <div>
                        <label for="descipcion" class='label'>descripcion</label>
                        <input name="descripcion" id='descripcion' class='textarea textarea-bordered' placeholder='descripcion del producto'/>
                    </div>
                   {{-- precio --}}
                   <div>
                        <label for="precio" class='label'>precio</label>
                        <input type="number" name='precio' id='precio' class='input input-bordered' placeholder='precio del producto'required/>
                   </div>
                   {{--stock--}}
                   <div>
                        <label for="stock" class='label'>stock</label>
                        <input type="number" name='stock' id='stock' class='input input-bordered' placeholder='stock del producto'required/>
                    </div>
                    {{--Boton guardar--}}
                    <button type='submit'class='btn btn-primary'>crear producto</button>

                </form>

            </div>

        </div>
    </div>



@endsection
