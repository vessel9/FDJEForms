@extends('layouts.app')
@section('content')
    <div class="container">
        {{-- <form action="{{ action('FormularioRegistroController@store') }}" method="post"> --}}
        <form action="{{ route('formulario.store') }}" method="post" class="was-validated">
            @csrf
            <div>
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="card-header">Formulario de Registro de la Fundación Diabetes Juvenil del Ecuador
                        </div>
                        <h5 class="card-title"></h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Cedula</label>
                                    <input type="number" class="form-control" name="cedula" required maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nombre</label>
                                    <input type="text" class="form-control" name="nombres" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Apellidos</label>
                                    <input type="text" class="form-control" name="apellidos" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Fecha de Nacimiento</label>
                                    <input type="date" class="form-control" name="fecha_nacimiento" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">email</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">lugar_nacimiento</label>
                                    <input type="text" class="form-control" name="lugar_nacimiento" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">fecha_diagnostico_diabetes</label>
                                    <input type="date" class="form-control" name="fecha_diagnostico_diabetes" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">celular</label>
                                    <input type="number" class="form-control" name="celular" required maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">telefono_convencional</label>
                                    <input type="number" class="form-control" name="telefono_convencional" required maxlength="9" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">valor_hemoglobina</label>
                                    <input type="number" class="form-control" name="valor_hemoglobina" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">veces_mide_glucosa</label>
                                    <input type="number" class="form-control" name="veces_mide_glucosa" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">tiene_registro_glucosa</label>
                                    <input type="text" class="form-control" name="tiene_registro_glucosa" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">puede_medir_glucosa</label>
                                    <input type="text" class="form-control" name="puede_medir_glucosa" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">dosis_insulina_basal</label>
                                    <input type="number" class="form-control" name="dosis_insulina_basal" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">dosis_insulina_prandial</label>
                                    <input type="number" class="form-control" name="dosis_insulina_prandial" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">sintoma_frente_hipoglucemia</label>
                                    <input type="text" class="form-control" name="sintoma_frente_hipoglucemia" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">veces_hipoglucemia_menos</label>
                                    <input type="number" class="form-control" name="veces_hipoglucemia_menos" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">mas_baja_hipoglucemia</label>
                                    <input type="text" class="form-control" name="mas_baja_hipoglucemia" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">administra_hipoglucemia</label>
                                    <input type="text" class="form-control" name="administra_hipoglucemia" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">tiene_convulsiones</label>
                                    <input type="text" class="form-control" name="tiene_convulsiones" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">nombres_medico</label>
                                    <input type="text" class="form-control" name="nombres_medico" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">fecha_ultima_cita</label>
                                    <input type="date" class="form-control" name="fecha_ultima_cita" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">nombre_hospital</label>
                                    <input type="text" class="form-control" name="nombre_hospital" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">cedula_representante</label>
                                    <input type="number" class="form-control" name="cedula_representante" required maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">nombres_representante</label>
                                    <input type="text" class="form-control" name="nombres_representante" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">celular_representante</label>
                                    <input type="number" class="form-control" name="celular_representante" required maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">solicita_ayuda_fundacion</label>
                                    <input type="text" class="form-control" name="solicita_ayuda_fundacion" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">otra_enfermedad</label>
                                    <input type="text" class="form-control" name="otra_enfermedad" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">cantidad_familia</label>
                                    <input type="number" class="form-control" name="cantidad_familia" required max="20" min="0">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">cantidad_menores_edad</label>
                                    <input type="number" class="form-control" name="cantidad_menores_edad" required max="20" min="0">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">algun_discapacitado_familia</label>
                                    <input type="text" class="form-control" name="algun_discapacitado_familia" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">zona_vive</label>
                                    <input type="text" class="form-control" name="zona_vive" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">tipo_vivienda</label>
                                    <input type="text" class="form-control" name="tipo_vivienda" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">personas_aportan_familia</label>
                                    <input type="number" class="form-control" name="personas_aportan_familia" required max="20" min="0">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">situacion_jefe_hogar</label>
                                    <input type="text" class="form-control" name="situacion_jefe_hogar" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">problemas_diabetes</label>
                                    <input type="text" class="form-control" name="problemas_diabetes" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Ciudad:</label>
                                    <select name="id_ciudad" class="form-control" required>
                                        <option value="">Seleccione una opción</option>
                                        @foreach ($ciudades as $ciudad)
                                            <option value="{{ $ciudad->id }}">{{ $ciudad->nombre_ciudad }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tipo de diabetes</label>
                                    <select name="id_diabetes" class="form-control" required>
                                        <option value="">Seleccione una opción</option>
                                        @foreach ($diabetes as $tipodiabetes)
                                            <option value="{{ $tipodiabetes->id }}">
                                                {{ $tipodiabetes->tipo_diabetes }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">id_insulina_basals</label>
                                    <select name="id_insulina_basals" class="form-control" required>
                                        <option value="">Seleccione una opción</option>
                                        @foreach ($insulinaBasalPaciente as $insulinaBasal)
                                            <option value="{{ $insulinaBasal->id }}">{{ $insulinaBasal->nombre }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">id_insulina_prandials</label>
                                    <select name="id_insulina_prandials" class="form-control" required>
                                        <option value="">Seleccione una opción</option>
                                        @foreach ($insulinaPrandialPaciente as $insulinaPrandial)
                                            <option value="{{ $insulinaPrandial->id }}">
                                                {{ $insulinaPrandial->nombre }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">id_tipo_hospital</label>
                                    <select name="id_tipo_hospital" class="form-control" required>
                                        <option value="">Seleccione una opción</option>
                                        @foreach ($tipoHospitalPaciente as $tipoHospital)
                                            <option value="{{ $tipoHospital->id }}">
                                                {{ $tipoHospital->tipo_hospital }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">id_ayuda_fundacion</label>
                                    <select name="id_ayuda_fundacion" class="form-control" required>
                                        <option value="">Seleccione una opción</option>
                                        @foreach ($ayudaFundacionPaciente as $ayudaFundacion)
                                            <option value="{{ $ayudaFundacion->id }}">
                                                {{ $ayudaFundacion->tipo_ayuda }}</option>
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
            </div>
    </div>
    </form>
    </div>
@endsection
