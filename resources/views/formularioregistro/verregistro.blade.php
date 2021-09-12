@extends('layouts.app')
@section('content')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <div class="container">
        <div class="card mb-5">
            <div class="card-header text-white bg-primary">Informacion de: &nbsp{{ $paciente->nombres }} </div>
            <div class="card-body">
            <div class="card">
                <div class="card-body">
                    <div class="card-header text-white bg-secondary">&nbsp&nbsp&nbsp&nbsp&nbspInformacion Personal</div>
                    <br>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Cédula/Pasaporte:</strong>
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
                    <strong>Email:</strong>
                    {{ $paciente->email }}
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
                    <strong>Lugar de Nacimiento:</strong>
                    {{ $paciente->lugar_nacimiento }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Provincia:</strong>
                    {{ $provinciaBD->nombre}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Ciudad:</strong>
                {{ $ciudadBD->nombre_ciudad}}
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
                    <strong>Teléfono Convencional:</strong>
                    {{ $paciente->telefono_convencional }}
                </div>
            </div>
            <div class="card-header text-white bg-secondary">&nbsp&nbsp&nbsp&nbsp&nbspInformacion diabetes</div>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tipo diabetes:</strong>
                    {{ $diabetesBD->tipo_diabetes}}
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
                    <strong>Tipo ayuda:</strong>
                    {{ $ayudaFundacionPacienteBD->tipo_ayuda}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Valor del Examen de Hemoglobina Glicosilada (HbA1c) %:</strong>
                    {{ $paciente->valor_hemoglobina }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fecha del Último Examen de Hemoglobina Glicosilada:</strong>
                    {{ $paciente->fecha_ultimo_examen_hemoglobina }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>¿Cuántas veces mide la glucosa en el día?:</strong>
                    {{ $paciente->veces_mide_glucosa }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>¿Lleva un registro escrito?:</strong>
                    {{ $paciente->tiene_registro_glucosa }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>¿Puede medirse la glucosa por sí sólo?:</strong>
                    {{ $paciente->puede_medir_glucosa }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre de la Insulina Basal que utiliza:</strong>
                    {{ $insulinaBasalPacienteBD->nombre}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Dosis de Insulina basal(Ejemplo: mañana = 5 u. / tarde = 4 u.):</strong>
                    {{ $paciente->dosis_insulina_basal }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre de la Insulina prandial /bolus que utiliza (insulina rápida):</strong>
                    {{ $insulinaPrandialPacienteBD->nombre}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Dosis de Insulina rápida (Ejemplo: desayuno = 4 u. / almuerzo= 3 u. / cena=3u. ):</strong>
                    {{ $paciente->dosis_insulina_prandial }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>¿Presenta síntomas frente a una hipoglucemía?:</strong>
                    {{ $paciente->sintoma_frente_hipoglucemia }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>¿Cuántas hipoglucemias tuvo la pasada semana?:</strong>
                    {{ $paciente->veces_hipoglucemia_menos }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>¿Cuál fue número más bajo de hipoglucemia?:</strong>
                    {{ $paciente->mas_baja_hipoglucemia }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>¿Cuándo tiene hipoglucemias qué suele hacer/administrar?:</strong>
                    {{ $paciente->administra_hipoglucemia }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>¿Ha convulsionado alguna vez en su vida?:</strong>
                    {{ $paciente->tiene_convulsiones }}
                </div>
            </div>
            <div class="card-header text-white bg-secondary">&nbsp&nbsp&nbsp&nbsp&nbspInformacion Medica</div>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre del Médico especialista en diabetes:</strong>
                    {{ $medicoBD->nombres}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fecha de la última visita al médico especialista:</strong>
                    {{ $paciente->fecha_ultima_cita }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>¿Alguna otra enfermedad a parte de la diabetes?:</strong>
                    {{ $paciente->otra_enfermedad }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>¿Hospital o Clínica donde se atiende?:</strong>
                    {{ $paciente->nombre_hospital }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>¿El Hospital donde se hace atender es?:</strong>
                    {{ $tipoHospitalPacienteBD->tipo_hospital}}
                </div>
            </div>
            <div class="card-header text-white bg-secondary">&nbsp&nbsp&nbsp&nbsp&nbspInformacion representante</div>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Célula/Pasaporte del Representante:</strong>
                    {{ $paciente->cedula_representante }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre y Apellido del Representante:</strong>
                    {{ $paciente->nombres_representante }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Teléfono de contacto:</strong>
                    {{ $paciente->celular_representante }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Desea solicitar ayuda para insumos/insulinas:</strong>
                    {{ $paciente->solicita_ayuda_fundacion }}
                </div>
            </div>
            <div class="card-header text-white bg-secondary">&nbsp&nbsp&nbsp&nbsp&nbspInformacion social</div>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>¿Cuántas personas conforman su familia?:</strong>
                    {{ $paciente->cantidad_familia }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>¿Cuántos personas de su familia son menores de edad?:</strong>
                    {{ $paciente->cantidad_menores_edad }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>¿Alguien es su familia presenta algún tipo de discapacidad? Cuál?:</strong>
                    {{ $paciente->algun_discapacitado_familia }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>¿En qué zona vive usted?:</strong>
                    {{ $paciente->zona_vive }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>El lugar donde usted vive es:</strong>
                    {{ $paciente->tipo_vivienda }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>¿Cuántas personas aportan económicamente en su familia?:</strong>
                    {{ $paciente->personas_aportan_familia }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>¿El Jefe de hogar actualmente es?:</strong>
                    {{ $paciente->situacion_jefe_hogar }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>¿Cuál es su principal problema para un buen cuidado de la diabetes?:</strong>
                    {{ $paciente->problemas_diabetes }}
                </div>
            </div>
            </div>
            <div class="card-footer">
               <a href="{{ url('/home') }}" class="btn btn-info" role="button">Atras</a>
              </div>
        </div>
    </div>
</div>
    </div>
@endsection
