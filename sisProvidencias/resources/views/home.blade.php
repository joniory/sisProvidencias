@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center">Módulos</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ url('/Seguridades/seguridades') }}" type="button" class="btn btn-default" >SEGURIDADES</a>
                    <a href="{{ url('/parametros') }}" type="button" class="btn btn-default">PARAMETROS</a>
                    <a href="{{ url('/providencias') }}" type="button" class="btn btn-default">PROVIDENCIAS</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
