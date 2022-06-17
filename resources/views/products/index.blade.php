@extends('layouts.app')
@section('content')
    <h5>Listado de Productos <a href="{{route('products.create')}}" class="btn">crear nuevo producto</a> </h5>
    <hr>
    @include('layouts.components.alerts')


    <table>
        <thead>
        <tr>
            <th>NOMBRE</th>
            <th>DESCRIPCION</th>
            <th>PRECIO</th>
            <th>ACCIONES</th>
        </tr>
        </thead>

        <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>
                <a class="waves-effect waves-light btn blue darken-1" >Detalles</a>
                <a class="waves-effect waves-light btn orange darken-4" >Editar</a>
                <a class="waves-effect waves-light btn deep-orange accent-4" >Eliminar</a>

            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
