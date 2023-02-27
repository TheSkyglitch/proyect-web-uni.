@extends('layouts.app')

@section('template_title')
    {{ $victima->name ?? 'Show Victima' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Victima</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('victimas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $victima->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $victima->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $victima->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $victima->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $victima->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
