@extends('layouts.app')
@section('content')
    <h5>Listado de Provedores</h5>
    <hr>
    <table>
        <thead>
        <tr>
            <th>NOMBRE</th>
            <th>NIT</th>
            <th>DIRECCION</th>
            <th>ACCIONES</th>
        </tr>
        </thead>

        <tbody>
        @foreach($providers as $provider)
            <tr>
                <td>{{$provider->name}}</td>
                <td>{{$provider->nit}}</td>
                <td>{{$provider->address}}</td>
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
