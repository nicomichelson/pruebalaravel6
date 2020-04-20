@extends('layouts.principal')

    @section('content')
    <div class="conteiner">
        <div class="col-md-8 col-md-offset-2">
            <h1>Lista de Personas</h1>

            @foreach($personas as $persona)
               
            <div class="panel panel-default">
                    <div class="panel-body">
                        {{ $persona->firstName }}
                        {{ $persona->lastName }}
                    </div>
                    
            </div>

            @endforeach

            {{ $personas->render() }}

        </div>
    </div>
    @endsection
