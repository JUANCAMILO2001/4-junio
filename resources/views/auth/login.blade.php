@extends('layouts.guest')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col s6 offset-s3">
                <div class="card horizontal">
                    <div class="card-stacked">
                        <div class="card-content">
                            <form action="{{route('login')}}" method="post">
                                @csrf
                                <div class="input-field col s12">
                                    <input id="email" type="email" name="email" class="validate" required>
                                    <label for="email">Correo electronico</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="password" type="password" name="password" class="validate" required>
                                    <label for="password">Contraseña</label>
                                </div>
                                <div class="col s12">
                                    <button type="submit" class="waves-effect waves-light btn">Conectarme</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
