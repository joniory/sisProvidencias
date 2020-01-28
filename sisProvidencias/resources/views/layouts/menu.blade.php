<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center">ASIGNAR ACCIONES POR MODULO</div>

                <div >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ url('/Seguridades/perfiles') }}" type="button" class="btn btn-default" >Perfiles</a>
                    <a href="{{ url('/Seguridades/usuarios') }}" type="button" class="btn btn-default" >Usuarios</a>
                    <a href="{{ url('/Seguridades/modulos') }}" type="button" class="btn btn-default" >Módulos</a>
                    <a href="{{ url('/Seguridades/procesos') }}" type="button" class="btn btn-default" >Procesos</a>
                    <a href="{{ url('/Seguridades/acciones') }}" type="button" class="btn btn-default" >Acciones</a>
                    <a href="{{ url('/Seguridades/accionesPorModulo') }}" type="button" class="btn btn-default" >Asignar acciones por módulo</a>
                    <a href="{{ url('/Seguridades/perfilesPorModulo') }}" type="button" class="btn btn-default" >Asignar perfiles por módulo</a>
                    <a href="{{ url('/Seguridades/usuarioAgenciaPerfil') }}" type="button" class="btn btn-default" >Asignar usuario, agencia y perfil</a>
                    <a href="{{ url('/Seguridades/horarioAcceso') }}" type="button" class="btn btn-default" >Horario acceso</a>
                    <a href="{{ url('/Seguridades/horarioPerfilAgencia') }}" type="button" class="btn btn-default" >Asignar horario perfil agencia</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>