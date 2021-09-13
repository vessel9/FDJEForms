@extends('layouts.app')
@section('content')
<div class="container">
    {{-- <form action="{{ action('FormularioRegistroController@store') }}" method="post"> --}}
    <form action="{{ route('formulario.store') }}" method="post" class="was-validated">
        @csrf
        <div>
            <div class="card mb-5">
                <div class="card-body">
                    <div class="card-header text-white bg-primary">Formulario de Registro de la Fundación Diabetes
                        Juvenil del Ecuador
                    </div>
                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h6>Por favor corrige los errores</h6>
                    </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header text-white bg-secondary">&nbsp&nbsp&nbsp&nbsp&nbspInformacion
                                Personal</div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Tipo de Diabetes:</label>
                                        <select name="id_diabetes" class="form-control" required>
                                            <option value="{{old('id_diabetes')}}">Seleccione una opción</option>
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
                                            value="{{old('fecha_diagnostico_diabetes')}}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Email:</label>
                                        <input type="email" class="form-control" name="email" value="{{old('email')}}"
                                            required>
                                        @if ($errors->has('email'))
                                        <p class="text-danger">{{ $errors->first('email') }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div clas="row">
                                <div class="form-group">
                                    <label for="">¿Qué tipo de información o ayuda requiere?</label>
                                    <select name="id_ayuda_fundacion" class="form-control" required>
                                        <option value="{{old('id_ayuda_fundacion')}}">Seleccione una opción</option>
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
                                            value="{{old('nombres')}}" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Apellidos:</label>
                                        <input type="text" class="form-control" name="apellidos"
                                            value="{{old('apellidos')}}" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Cédula/Pasaporte:</label>
                                        <input type="text" class="form-control" name="cedula" required maxlength="10"
                                            oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                            value="{{old('cedula')}}">
                                        @if ($errors->has('cedula'))
                                            <p class="text-danger">{{ $errors->first('cedula') }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Lugar de Nacimiento:</label>
                                        <input type="text" class="form-control" name="lugar_nacimiento"
                                            value="{{old('lugar_nacimiento')}}" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Provincia:</label>
                                        <select name="id_provincia" id="provincia" class="form-control" required>
                                            <option value="{{old('id_provincia')}}">Seleccione una opción</option>
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
                                            <option value="{{old('id_ciudad')}}">Seleccione una opción</option>
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
                                            value="{{old('celular')}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Teléfono Convencional:</label>
                                        <input type="number" class="form-control" name="telefono_convencional" required
                                            maxlength="9" value="{{old('telefono_convencional')}}"
                                            oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                    </div>
                                </div>
                            </div>
                            <div class="card-header text-white bg-secondary">&nbsp&nbsp&nbsp&nbsp&nbspInformacion
                                Diabetes</div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Valor del Examen de Hemoglobina Glicosilada (HbA1c) %</label>
                                        <input type="text" class="form-control" name="valor_hemoglobina" maxlength="10"
                                        oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" 
                                            value="{{old('valor_hemoglobina')}}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Fecha del Último Examen de Hemoglobina Glicosilada</label>
                                        <input type="date" class="form-control" name="fecha_ultimo_examen_hemoglobina"
                                            value="{{old('fecha_ultimo_examen_hemoglobina')}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">¿Cuántas veces mide la glucosa en el día?</label>
                                        <input type="number" class="form-control" name="veces_mide_glucosa" 
                                            value="{{old('veces_mide_glucosa')}}" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">¿Lleva un registro escrito?</label>
                                        <select name="tiene_registro_glucosa" class="form-control" required>
                                            <option value="{{old('tiene_registro_glucosa')}}">Seleccione una opción</option>
                                            <option value="SI">SI</option>
                                            <option value="NO">NO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">¿Puede medirse la glucosa por sí sólo?:</label>
                                        <select name="puede_medir_glucosa" class="form-control" required>
                                            <option value="{{old('puede_medir_glucosa')}}">Seleccione una opción</option>
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
                                            <option value="{{old('id_insulina_basals')}}">Seleccione una opción</option>
                                            @foreach ($insulinaBasalPaciente as $insulinaBasal)
                                            <option value="{{ $insulinaBasal->id }}">{{ $insulinaBasal->nombre }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Dosis de Insulina basal(Ejemplo: mañana = 5 u. / tarde = 4
                                            u.)</label>
                                        <input type="text" class="form-control" name="dosis_insulina_basal" 
                                            value="{{old('dosis_insulina_basal')}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nombre de la Insulina prandial /bolus que utiliza (insulina
                                            rápida)</label>
                                        <select name="id_insulina_prandials" class="form-control" required>
                                            <option value="{{old('id_insulina_prandials')}}">Seleccione una opción</option>
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
                                        <label for="">Dosis de Insulina rápida (Ejemplo: desayuno = 4 u. / almuerzo= 3
                                            u. / cena=3u. )</label>
                                        <input type="text" class="form-control" name="dosis_insulina_prandial" 
                                            value="{{old('dosis_insulina_prandial')}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">¿Presenta síntomas frente a una hipoglucemía?</label>
                                        <select name="sintoma_frente_hipoglucemia" class="form-control" required>
                                            <option value="{{old('sintoma_frente_hipoglucemia')}}">Seleccione una opción</option>
                                            <option value="SI">SI</option>
                                            <option value="NO">NO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">¿Cuántas hipoglucemias tuvo la pasada semana?</label>
                                        <input type="number" class="form-control" name="veces_hipoglucemia_menos"
                                            value="{{old('veces_hipoglucemia_menos')}}" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">¿Cuál fue número más bajo de hipoglucemia?</label>
                                        <input type="number" class="form-control" name="mas_baja_hipoglucemia" 
                                            value="{{old('mas_baja_hipoglucemia')}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">¿Cuándo tiene hipoglucemias qué suele hacer/administrar?</label>
                                        <input type="text" class="form-control" name="administra_hipoglucemia" 
                                            value="{{old('administra_hipoglucemia')}}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">¿Ha convulsionado alguna vez en su vida?</label>
                                        <select name="tiene_convulsiones" class="form-control" required>
                                            <option value="{{old('tiene_convulsiones')}}">Seleccione una opción</option>
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
                                            <option value="{{old('id_medico')}}">Seleccione una opción</option>
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
                                            value="{{old('fecha_ultima_cita')}}" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">¿Alguna otra enfermedad a parte de la diabetes?</label>
                                        <input type="text" class="form-control" name="otra_enfermedad" 
                                            value="{{old('otra_enfermedad')}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">¿Hospital o Clínica donde se atiende?</label>
                                        <input type="text" class="form-control" name="nombre_hospital" 
                                            value="{{old('nombre_hospital')}}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">¿El Hospital donde se hace atender es?</label>
                                        <select name="id_tipo_hospital" class="form-control" required>
                                            <option value="{{old('id_tipo_hospital')}}">Seleccione una opción</option>
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
                                        <input type="text" class="form-control" name="cedula_representante" required
                                            maxlength="10" value="{{old('cedula_representante')}}"
                                            oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nombre y Apellido del Representante:</label>
                                        <input type="text" class="form-control" name="nombres_representante" 
                                            value="{{old('nombres_representante')}}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Teléfono de contacto:</label>
                                        <input type="number" class="form-control" name="celular_representante" required
                                            maxlength="10" value="{{old('celular_representante')}}"
                                            oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">¿Desea solicitar ayuda para insumos/insulinas?</label>
                                        <select name="solicita_ayuda_fundacion" class="form-control" required>
                                            <option value="{{old('solicita_ayuda_fundacion')}}">Seleccione una opción</option>
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
                                        <input type="number" class="form-control" name="cantidad_familia" required
                                            max="20" min="0" value="{{old('cantidad_familia')}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">¿Cuántos personas de su familia son menores de edad?</label>
                                        <input type="number" class="form-control" name="cantidad_menores_edad" required
                                            max="20" min="0" value="{{old('cantidad_menores_edad')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">¿Alguien es su familia presenta algún tipo de discapacidad?
                                            Cuál?</label>
                                        <input type="text" class="form-control" name="algun_discapacitado_familia"
                                            required value="{{old('algun_discapacitado_familia')}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">¿En qué zona vive usted?</label>
                                        <select name="zona_vive" class="form-control" required>
                                            <option value="{{old('zona_vive')}}">Seleccione una opción</option>
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
                                            <option value="{{old('tipo_vivienda')}}">Seleccione una opción</option>
                                            <option value="PROPIA">PROPIA</option>
                                            <option value="ARRENDADA">ARRENDADA</option>
                                            <option value="OTROS">OTROS</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">¿Cuántas personas aportan económicamente en su familia?</label>
                                        <input type="number" class="form-control" name="personas_aportan_familia"
                                            required max="20" min="0" value="{{old('personas_aportan_familia')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">¿El Jefe de hogar actualmente es?</label>
                                        <input type="text" class="form-control" name="situacion_jefe_hogar" 
                                            value="{{old('situacion_jefe_hogar')}}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">¿Cuál es su principal problema para un buen cuidado de la
                                            diabetes?</label>
                                        <input type="text" class="form-control" name="problemas_diabetes" 
                                            value="{{old('problemas_diabetes')}}" required>
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
                </div>
            </div>
        </div>
</div>
</form>
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