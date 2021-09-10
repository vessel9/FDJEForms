@extends('layouts.app')
@section('content')


    <div class="container">
        <div class="card">
            {{-- <form id="" action="{{ action('FormularioRegistroController@update', $paciente->id) }}" method="post"> --}}
            <div class="card-header">Formulario de Registro de la Fundación Diabetes Juvenil del Ecuador
            </div>
            <div class="card-body">
                <!-- One "tab" for each step in the form: -->
                <form action="{{ route('formulario.update', $paciente->id) }}" method="post" class="was-validated">
                    <div class="card">
                        <div class="card-body">
                          @csrf
                            @method('PATCH')
                            {{-- <div class="card-header">Formulario de Registro de la Fundación Diabetes Juvenil del Ecuador</div> --}}
                            <div class="row">
                                <div class="col-md-6">
                                    
                                    <div class="form-group">
                                        <label for="nombre">Cedula</label>
                                        <input type="text" class="form-control" name="cedula" maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                            value="{{ $paciente->cedula }}" placeholder="Ingrese su cedula" placeholder="Ingrese su cedula" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nombre">Nombres</label>
                                        <input type="text" class="form-control" name="nombres" value="{{ $paciente->nombres }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="apellido">Apellidos</label>
                                        <input type="text" class="form-control" name="apellidos" value="{{ $paciente->apellidos }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                                        <input type="date" class="form-control" name="fecha_nacimiento" value="{{ $paciente->fecha_nacimiento }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">email</label>
                                        <input type="email" class="form-control" name="email" value="{{ $paciente->email }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">lugar_nacimiento</label>
                                        <input type="text" class="form-control" name="lugar_nacimiento" value="{{ $paciente->lugar_nacimiento }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">fecha_diagnostico_diabetes</label>
                                        <input type="date" class="form-control" name="fecha_diagnostico_diabetes" value="{{ $paciente->fecha_diagnostico_diabetes }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">celular</label>
                                        <input type="text" class="form-control" name="celular" value="{{ $paciente->celular }}" required
                                        maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">telefono_convencional</label>
                                        <input type="text" class="form-control" name="telefono_convencional" value="{{ $paciente->telefono_convencional }}" required
                                        maxlength="9" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">valor_hemoglobina</label>
                                        <input type="text" class="form-control" name="valor_hemoglobina" value="{{ $paciente->valor_hemoglobina }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">veces_mide_glucosa</label>
                                        <input type="text" class="form-control" name="veces_mide_glucosa" value="{{ $paciente->veces_mide_glucosa }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">tiene_registro_glucosa</label>
                                        <input type="text" class="form-control" name="tiene_registro_glucosa" value="{{ $paciente->tiene_registro_glucosa }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">puede_medir_glucosa</label>
                                        <input type="text" class="form-control" name="puede_medir_glucosa" value="{{ $paciente->puede_medir_glucosa }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">dosis_insulina_basal</label>
                                        <input type="text" class="form-control" name="dosis_insulina_basal" value="{{ $paciente->dosis_insulina_basal }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">dosis_insulina_prandial</label>
                                        <input type="text" class="form-control" name="dosis_insulina_prandial" value="{{ $paciente->dosis_insulina_prandial }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">sintoma_frente_hipoglucemia</label>
                                        <input type="text" class="form-control" name="sintoma_frente_hipoglucemia" value="{{ $paciente->sintoma_frente_hipoglucemia }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">veces_hipoglucemia_menos</label>
                                        <input type="text" class="form-control" name="veces_hipoglucemia_menos" value="{{ $paciente->veces_hipoglucemia_menos }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">mas_baja_hipoglucemia</label>
                                        <input type="text" class="form-control" name="mas_baja_hipoglucemia" value="{{ $paciente->mas_baja_hipoglucemia }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">administra_hipoglucemia</label>
                                        <input type="text" class="form-control" name="administra_hipoglucemia" value="{{ $paciente->administra_hipoglucemia }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">tiene_convulsiones</label>
                                        <input type="text" class="form-control" name="tiene_convulsiones" value="{{ $paciente->tiene_convulsiones }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">nombres_medico</label>
                                        <input type="text" class="form-control" name="nombres_medico" value="{{ $paciente->nombres_medico }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">fecha_ultima_cita</label>
                                        <input type="date" class="form-control" name="fecha_ultima_cita" value="{{ $paciente->fecha_ultima_cita }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">nombre_hospital</label>
                                        <input type="text" class="form-control" name="nombre_hospital" value="{{ $paciente->nombre_hospital }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">cedula_representante</label>
                                        <input type="text" class="form-control" name="cedula_representante" value="{{ $paciente->cedula_representante }}" required
                                        maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">nombres_representante</label>
                                        <input type="text" class="form-control" name="nombres_representante" value="{{ $paciente->nombres_representante }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">celular_representante</label>
                                        <input type="text" class="form-control" name="celular_representante" value="{{ $paciente->celular_representante }}" required
                                        maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">solicita_ayuda_fundacion</label>
                                        <input type="text" class="form-control" name="solicita_ayuda_fundacion" value="{{ $paciente->solicita_ayuda_fundacion }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">otra_enfermedad</label>
                                        <input type="text" class="form-control" name="otra_enfermedad" value="{{ $paciente->otra_enfermedad }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">cantidad_familia</label>
                                        <input type="text" class="form-control" name="cantidad_familia" value="{{ $paciente->cantidad_familia }}" required max="20" min="0">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">cantidad_menores_edad</label>
                                        <input type="text" class="form-control" name="cantidad_menores_edad" value="{{ $paciente->cantidad_menores_edad }}" required max="20" min="0">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">algun_discapacitado_familia</label>
                                        <input type="text" class="form-control" name="algun_discapacitado_familia" value="{{ $paciente->algun_discapacitado_familia }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">zona_vive</label>
                                        <input type="text" class="form-control" name="zona_vive" value="{{ $paciente->zona_vive }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">tipo_vivienda</label>
                                        <input type="text" class="form-control" name="tipo_vivienda" value="{{ $paciente->tipo_vivienda }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">personas_aportan_familia</label>
                                        <input type="number" class="form-control" name="personas_aportan_familia" value="{{ $paciente->personas_aportan_familia }}" required max="20" min="0">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">situacion_jefe_hogar</label>
                                        <input type="text" class="form-control" name="situacion_jefe_hogar" value="{{ $paciente->situacion_jefe_hogar }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">problemas_diabetes</label>
                                        <input type="text" class="form-control" name="problemas_diabetes" value="{{ $paciente->problemas_diabetes }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">id_ciudad</label>
                                        <select class="form-control" name="id_ciudad" required>
                                            <option value="{{ $paciente->id_ciudad }}">{{ $ciudadBD->nombre_ciudad}}</option>
                                            @foreach($ciudades as $ciudad)
                                                <option value="{{ $ciudad->id }}">{{ $ciudad->nombre_ciudad }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">id_diabetes</label>
                                        <select class="form-control" name="id_diabetes" required>
                                            <option value="{{ $paciente->id_diabetes }}">{{ $diabetesBD->tipo_diabetes}}</option>
                                            @foreach($diabetes as $diab)
                                                <option value="{{ $diab->id }}">{{ $diab->tipo_diabetes }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>                            
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">id_insulina_basals</label>
                                        <select class="form-control" name="id_insulina_basals" required>
                                            <option value="{{ $paciente->id_insulina_basals }}">{{ $insulinaBasalPacienteBD->nombre}}</option>
                                            @foreach($insulinaBasalPaciente as $insulina_basal)
                                                <option value="{{ $insulina_basal->id }}">{{ $insulina_basal->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">id_insulina_prandials</label>
                                        <select class="form-control" name="id_insulina_prandials" required>
                                            <option value="{{ $paciente->id_insulina_prandials }}">{{ $insulinaPrandialPacienteBD->nombre}}</option>
                                            @foreach($insulinaPrandialPaciente as $insulina_prandial)
                                                <option value="{{ $insulina_prandial->id }}">{{ $insulina_prandial->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">id_tipo_hospital</label>
                                        <select class="form-control" name="id_tipo_hospital" required>
                                            <option value="{{ $paciente->id_tipo_hospital }}">{{ $tipoHospitalPacienteBD->tipo_hospital}}</option>
                                            @foreach($tipoHospitalPaciente as $tipo_hospital)
                                                <option value="{{ $tipo_hospital->id }}">{{ $tipo_hospital->tipo_hospital }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">id_ayuda_fundacion</label>
                                        <select class="form-control" name="id_ayuda_fundacion" required>
                                            <option value="{{ $paciente->id_ayuda_fundacion }}">{{ $ayudaFundacionPacienteBD->tipo_ayuda}}</option>
                                            @foreach($ayudaFundacionPaciente as $ayuda_fundacion)
                                                <option value="{{ $ayuda_fundacion->id }}">{{ $ayuda_fundacion->tipo_ayuda }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>          
                            <div class="row">
                                <div class="col-md-6">
                                    <button class="btn btn-success" type="submit">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
