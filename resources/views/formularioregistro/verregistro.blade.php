@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Informacion de: &nbsp{{ $paciente->nombres }} </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $paciente->cedula }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $paciente->nombres }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $paciente->apellidos }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Fecha de nacimiento:</strong>
                            {{ $paciente->fecha_nacimiento }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $paciente->email }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Lugar de nacimiento:</strong>
                            {{ $paciente->lugar_nacimiento }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Fecha de Diagnostico diabetes:</strong>
                            {{ $paciente->fecha_diagnostico_diabetes }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $paciente->celular }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Telefono convencional:</strong>
                            {{ $paciente->telefono_convencional }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Valor Hemoglobina:</strong>
                            {{ $paciente->valor_hemoglobina }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Veces que se mide la glucosa:</strong>
                            {{ $paciente->veces_mide_glucosa }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Tiene registro de glucosa:</strong>
                            {{ $paciente->tiene_registro_glucosa }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Puede medir la glucosa:</strong>
                            {{ $paciente->puede_medir_glucosa }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Dosis insulina basal:</strong>
                            {{ $paciente->dosis_insulina_basal }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Dosis insulina pradial:</strong>
                            {{ $paciente->dosis_insulina_prandial }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Sintoma frente hipoglucemia:</strong>
                            {{ $paciente->sintoma_frente_hipoglucemia }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Veces Hipoglucemia menos:</strong>
                            {{ $paciente->veces_hipoglucemia_menos }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
