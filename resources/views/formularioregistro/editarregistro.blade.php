@extends('layouts.app')
@section('content')


<div class="container">
    <div class="card mb-5">
        {{-- <form id="" action="{{ action('FormularioRegistroController@update', $paciente->id) }}" method="post"> --}}
        <div class="card-header text-white bg-primary">Formulario de Registro de la Fundación Diabetes Juvenil del
            Ecuador
        </div>
        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h6>Por favor corrige los errores</h6>
        </div>
        @endif
        <div class="card-body">
            <!-- One "tab" for each step in the form: -->
            <form action="{{ route('formulario.update', $paciente->id) }}" method="post" class="was-validated">
                <div class="card">
                    <div class="card-body">
                        @csrf
                        @method('PATCH')
                        <div class="card-header text-white bg-secondary">&nbsp&nbsp&nbsp&nbsp&nbspInformacion Personal
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Tipo de Diabetes:</label>
                                    <select name="id_diabetes" class="form-control" required>
                                        <option value="{{ $paciente->id_diabetes }}">{{ $diabetesBD->tipo_diabetes}}
                                            @foreach ($diabetes as $tipodiabetes)
                                        <option value="{{ $tipodiabetes->id }}">
                                            {{ $tipodiabetes->tipo_diabetes }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Fecha de Diagnóstico:</label>
                                    <input type="date" class="form-control" name="fecha_diagnostico_diabetes"
                                        value="{{ $paciente->fecha_diagnostico_diabetes }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Email:</label>
                                    <input type="email" class="form-control" name="email" value="{{ $paciente->email }}"
                                        required>
                                    @if ($errors->has('email'))
                                    <p class="text-danger">{{ $errors->first('email') }}"{{old('email')}}"</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div clas="row">
                            <div class="form-group">
                                <label for="">¿Qué tipo de información o ayuda requiere?</label>
                                <select name="id_ayuda_fundacion" class="form-control" required>
                                    <option value="{{ $paciente->id_ayuda_fundacion }}">
                                        {{ $ayudaFundacionPacienteBD->tipo_ayuda}}</option>
                                    @foreach ($ayudaFundacionPaciente as $ayudaFundacion)
                                    <option value="{{ $ayudaFundacion->id }}">
                                        {{ $ayudaFundacion->tipo_ayuda }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nombres:</label>
                                    <input type="text" class="form-control" name="nombres"
                                        value="{{ $paciente->nombres }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Apellidos:</label>
                                    <input type="text" class="form-control" name="apellidos"
                                        value="{{ $paciente->apellidos }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Cédula/Pasaporte:</label>
                                    <input type="number" class="form-control" name="cedula" required maxlength="10"
                                        oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                        value="{{ $paciente->cedula }}" required>
                                    @if ($errors->has('cedula'))
                                    <p class="text-danger">{{ $errors->first('cedula')}}"{{old('cedula')}}"</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Lugar de Nacimiento:</label>
                                    <input type="text" class="form-control" name="lugar_nacimiento"
                                        value="{{ $paciente->lugar_nacimiento }}" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Provincia:</label>
                                    <select name="id_provincia" id="provincia" class="form-control" required>
                                        <option value="{{ $provinciaBD->id }}">{{ $provinciaBD->nombre}}</option>
                                        @foreach ($provincias as $provincia)
                                        <option value="{{ $provincia->id }}">{{ $provincia->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Ciudad:</label>
                                    <select name="id_ciudad" id="ciudad" class="form-control" required>
                                        <option value="{{ $paciente->id_ciudad }}">{{ $ciudadBD->nombre_ciudad}}
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Celular:</label>
                                    <input type="number" class="form-control" name="celular" required maxlength="10"
                                        oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                        value="{{ $paciente->celular }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Teléfono Convencional:</label>
                                    <input type="number" class="form-control" name="telefono_convencional" required
                                        maxlength="9"
                                        oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                        value="{{ $paciente->telefono_convencional }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="card-header text-white bg-secondary">&nbsp&nbsp&nbsp&nbsp&nbspInformacion Diabetes
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Valor del Examen de Hemoglobina Glicosilada (HbA1c) %</label>
                                    <input type="text" class="form-control" name="valor_hemoglobina"
                                        value="{{ $paciente->valor_hemoglobina }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Fecha del Último Examen de Hemoglobina Glicosilada</label>
                                    <input type="date" class="form-control" name="fecha_ultimo_examen_hemoglobina"
                                        value="{{ $paciente->fecha_ultimo_examen_hemoglobina }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">¿Cuántas veces mide la glucosa en el día?</label>
                                    <input type="number" class="form-control" name="veces_mide_glucosa"
                                        value="{{ $paciente->veces_mide_glucosa }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">¿Lleva un registro escrito?</label>
                                    <select name="tiene_registro_glucosa" class="form-control" required>
                                        <option value="{{ $paciente->tiene_registro_glucosa }}">
                                            {{ $paciente->tiene_registro_glucosa }}</option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">¿Puede medirse la glucosa por sí sólo?:</label>
                                    <select name="puede_medir_glucosa" class="form-control" required>
                                        <option value="{{ $paciente->puede_medir_glucosa }}">
                                            {{ $paciente->puede_medir_glucosa }}</option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nombre de la Insulina Basal que utiliza:</label>
                                    <select name="id_insulina_basals" class="form-control" required>
                                        <option value="{{ $paciente->id_insulina_basals }}">
                                            {{ $insulinaBasalPacienteBD->nombre}}</option>
                                        @foreach ($insulinaBasalPaciente as $insulinaBasal)
                                        <option value="{{ $insulinaBasal->id }}">{{ $insulinaBasal->nombre }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Dosis de Insulina basal(Ejemplo: mañana = 5 u. / tarde = 4 u.)</label>
                                    <input type="text" class="form-control" name="dosis_insulina_basal"
                                        value="{{ $paciente->dosis_insulina_basal }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nombre de la Insulina prandial /bolus que utiliza (insulina
                                        rápida)</label>
                                    <select name="id_insulina_prandials" class="form-control" required>
                                        <option value="{{ $paciente->id_insulina_prandials }}">
                                            {{ $insulinaPrandialPacienteBD->nombre}}</option>
                                        @foreach ($insulinaPrandialPaciente as $insulinaPrandial)
                                        <option value="{{ $insulinaPrandial->id }}">
                                            {{ $insulinaPrandial->nombre }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Dosis de Insulina rápida (Ejemplo: desayuno = 4 u. / almuerzo= 3 u. /
                                        cena=3u. )</label>
                                    <input type="text" class="form-control" name="dosis_insulina_prandial"
                                        value="{{ $paciente->dosis_insulina_prandial }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">¿Presenta síntomas frente a una hipoglucemía?</label>
                                    <select name="sintoma_frente_hipoglucemia" class="form-control" required>
                                        <option value="{{ $paciente->sintoma_frente_hipoglucemia }}">
                                            {{ $paciente->sintoma_frente_hipoglucemia }}</option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">¿Cuántas hipoglucemias tuvo la pasada semana?</label>
                                    <input type="number" class="form-control" name="veces_hipoglucemia_menos"
                                        value="{{ $paciente->veces_hipoglucemia_menos }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">¿Cuál fue número más bajo de hipoglucemia?</label>
                                    <input type="text" class="form-control" name="mas_baja_hipoglucemia"
                                        value="{{ $paciente->mas_baja_hipoglucemia }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">¿Cuándo tiene hipoglucemias qué suele hacer/administrar?</label>
                                    <input type="text" class="form-control" name="administra_hipoglucemia"
                                        value="{{ $paciente->administra_hipoglucemia }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">¿Ha convulsionado alguna vez en su vida?</label>
                                    <select name="tiene_convulsiones" class="form-control" required>
                                        <option value="{{ $paciente->tiene_convulsiones }}">
                                            {{ $paciente->tiene_convulsiones }}</option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-header text-white bg-secondary">&nbsp&nbsp&nbsp&nbsp&nbspInformacion Medica
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nombre del Médico especialista en diabetes</label>
                                    <select name="id_medico" class="form-control" required>
                                        <option value="{{ $paciente->id_medico }}">{{ $medicoBD->nombres}}</option>
                                        @foreach ($medicos as $medico)
                                        <option value="{{ $medico->id }}">{{ $medico->nombres }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Fecha de la última visita al médico especialista</label>
                                    <input type="date" class="form-control" name="fecha_ultima_cita"
                                        value="{{ $paciente->fecha_ultima_cita }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">¿Alguna otra enfermedad a parte de la diabetes?</label>
                                    <input type="text" class="form-control" name="otra_enfermedad"
                                        value="{{ $paciente->otra_enfermedad }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">¿Hospital o Clínica donde se atiende?</label>
                                    <input type="text" class="form-control" name="nombre_hospital"
                                        value="{{ $paciente->nombre_hospital }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">¿El Hospital donde se hace atender es?</label>
                                    <select name="id_tipo_hospital" class="form-control" required>
                                        <option value="{{ $paciente->id_tipo_hospital }}">
                                            {{ $tipoHospitalPacienteBD->tipo_hospital}}</option>
                                        @foreach ($tipoHospitalPaciente as $tipoHospital)
                                        <option value="{{ $tipoHospital->id }}">
                                            {{ $tipoHospital->tipo_hospital }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-header text-white bg-secondary">&nbsp&nbsp&nbsp&nbsp&nbspInformacion
                            Representante legal</div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Célula/Pasaporte del Representante:</label>
                                    <input type="number" class="form-control" name="cedula_representante" required
                                        maxlength="10"
                                        oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                        value="{{ $paciente->cedula_representante }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nombre y Apellido del Representante:</label>
                                    <input type="text" class="form-control" name="nombres_representante"
                                        value="{{ $paciente->nombres_representante }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Teléfono de contacto:</label>
                                    <input type="number" class="form-control" name="celular_representante" required
                                        maxlength="10"
                                        oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                        value="{{ $paciente->celular_representante }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">¿Desea solicitar ayuda para insumos/insulinas?</label>
                                    <select name="solicita_ayuda_fundacion" class="form-control" required>
                                        <option value="{{ $paciente->solicita_ayuda_fundacion }}">
                                            {{ $paciente->solicita_ayuda_fundacion }}</option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-header text-white bg-secondary">&nbsp&nbsp&nbsp&nbsp&nbspInformacion Social
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">¿Cuántas personas conforman su familia?</label>
                                    <input type="number" class="form-control" name="cantidad_familia" required max="20"
                                        min="0" value="{{ $paciente->cantidad_familia }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">¿Cuántos personas de su familia son menores de edad?</label>
                                    <input type="number" class="form-control" name="cantidad_menores_edad" required
                                        max="20" min="0" value="{{ $paciente->cantidad_menores_edad }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">¿Alguien es su familia presenta algún tipo de discapacidad?
                                        Cuál?</label>
                                    <input type="text" class="form-control" name="algun_discapacitado_familia"
                                        value="{{ $paciente->algun_discapacitado_familia }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">¿En qué zona vive usted?</label>
                                    <select name="zona_vive" class="form-control" required>
                                        <option value="{{ $paciente->zona_vive }}">{{ $paciente->zona_vive }}</option>
                                        <option value="ZONA RURAL">ZONA RURAL</option>
                                        <option value="ZONA URBANA">ZONA URBANA</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">¿El lugar donde usted vive es?</label>
                                    <select name="tipo_vivienda" class="form-control" required>
                                        <option value="{{ $paciente->tipo_vivienda }}">{{ $paciente->tipo_vivienda }}
                                        </option>
                                        <option value="PROPIA">PROPIA</option>
                                        <option value="ARRENDADA">ARRENDADA</option>
                                        <option value="OTROS">OTROS</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">¿Cuántas personas aportan económicamente en su familia?</label>
                                    <input type="number" class="form-control" name="personas_aportan_familia" required
                                        max="20" min="0" value="{{ $paciente->personas_aportan_familia }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">¿El Jefe de hogar actualmente es?</label>
                                    <input type="text" class="form-control" name="situacion_jefe_hogar"
                                        value="{{ $paciente->situacion_jefe_hogar }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">¿Cuál es su principal problema para un buen cuidado de la
                                        diabetes?</label>
                                    <input type="text" class="form-control" name="problemas_diabetes"
                                        value="{{ $paciente->problemas_diabetes }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-1">
                                <a href="{{ url('/home') }}" class="btn btn-info" role="button">Atras</a>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-success w-100" type="submit">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('#provincia').change(function(){
            $provincia_id = $(this).val();
            if($provincia_id)
            {
                var div=$(this).parent();
                var op=" "
                $.ajax({
                    url:"{!!URL::to('buscarCiudad')!!}",
                    method:"GET",
                    data:{'id':$provincia_id},
                    success:function(data)
                    {
                        op += '<option value="" selected>Elige una Ciudad</option>';
                        for(var i = 0; i < data.length ; i++){
                            op += '<option value="'+data[i].id+'">'+data[i].nombre_ciudad+'</option>';
                        }
                        $('select#ciudad').html(" ");
                        $('select#ciudad').append(op);
                    }, 
                    error:function(err) {
                        console.error(err);
                    }
                });
            }
        });
    });
</script>