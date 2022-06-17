@extends('layouts.app')
@section('content')
    <h5>Crear Nuevos Productos</h5>
    <hr>

    <div class="card horizontal">
        <div class="card-stacked">
            <div class="card-content">
                <form action="{{route('products.store')}}" method="post">
                    @csrf
                    <div class="input-field col s12">
                        <input id="name" type="text" name="name" class="validate" required>
                        <label for="name">Nombre del Producto</label>
                    </div>
                    <div class="input-field col s12">
                        <textarea id="description" name="description" class="materialize-textarea"></textarea>
                        <label for="description">Descripcion del Producto</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="price" type="number" name="price" class="materialize-textarea">
                        <label for="price">Precio del Producto</label>
                    </div>

                    <div class="input-field col s12">
                        <select name="provider_id" id="provider_id">

                            <option value="" disabled selected>Seleccionar...</option>
                            @foreach($providers as $provider)
                                <option value="{{$provider->id}}">{{$provider->name}}</option>
                            @endforeach

                        </select>
                        <label>Proveedor</label>
                    </div>
                    <button class="btn">Registrar Nuevo Producto</button> | <a href="{{route('products.index')}}">Cancelar</a>


                </form>
            </div>
        </div>
    </div>


@endsection
