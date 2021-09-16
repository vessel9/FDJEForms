<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;
use App\Ciudad;
use App\Provincia;
use App\Diabetes;
use App\InsulinaBasal;
use App\InsulinaPrandial;
use App\TipoHospital;
use App\AyudaFundacion;
use App\Medico;
use App\ProblemaDiabetes;
use App\SituacionJefeHogar;
use Illuminate\Validation\Rule;

class FormularioRegistroController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $diabetes = Diabetes::all();
        $ciudades = [];
        $insulinaBasalPaciente = InsulinaBasal::all();
        $insulinaPrandialPaciente = InsulinaPrandial::all();
        $tipoHospitalPaciente = TipoHospital::all();
        $ayudaFundacionPaciente = AyudaFundacion::all();
        $situacionJefeHogars = SituacionJefeHogar::all();
        $problemaDiabetes = ProblemaDiabetes::all();
        $provincias = Provincia::orderBy('nombre', 'ASC')->get();
        $medicos = Medico::all();
        return view('formularioregistro.crearregistro', compact(
            'ciudades',
            'diabetes',
            'insulinaBasalPaciente',
            'insulinaPrandialPaciente',
            'tipoHospitalPaciente',
            'ayudaFundacionPaciente',
            'provincias',
            'medicos',
            'situacionJefeHogars',
            'problemaDiabetes'
        ));
    }

    public function buscarCiudad(Request $request)
    {
        $data = Ciudad::where('id_provincia', $request->id)->orderBy('nombre_ciudad', 'ASC')->get();
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'email' => ['required', 'email', 'unique:pacientes,email'],
            'cedula' => 'required|unique:pacientes'
        ], [
            'email.unique' => 'El Email ya existe',
            'cedula.unique' => 'La cédula/pasaporte ya existe'
        ]);

        $paciente = new Paciente;
        $paciente->cedula = $request->cedula;
        $paciente->nombres = $request->nombres;
        $paciente->apellidos = $request->apellidos;
        $paciente->fecha_nacimiento = $request->fecha_nacimiento;
        $paciente->email = $request->email;
        $paciente->lugar_nacimiento = $request->lugar_nacimiento;
        $paciente->fecha_diagnostico_diabetes = $request->fecha_diagnostico_diabetes;
        $paciente->celular = $request->celular;
        $paciente->telefono_convencional = $request->telefono_convencional;
        $paciente->valor_hemoglobina = $request->valor_hemoglobina;
        $paciente->fecha_ultimo_examen_hemoglobina = $request->fecha_ultimo_examen_hemoglobina;
        $paciente->veces_mide_glucosa = $request->veces_mide_glucosa;
        $paciente->tiene_registro_glucosa = $request->tiene_registro_glucosa;
        $paciente->puede_medir_glucosa = $request->puede_medir_glucosa;
        $paciente->dosis_insulina_basal = $request->dosis_insulina_basal;
        $paciente->dosis_insulina_prandial = $request->dosis_insulina_prandial;
        $paciente->sintoma_frente_hipoglucemia = $request->sintoma_frente_hipoglucemia;
        $paciente->veces_hipoglucemia_menos = $request->veces_hipoglucemia_menos;
        $paciente->mas_baja_hipoglucemia = $request->mas_baja_hipoglucemia;
        $paciente->administra_hipoglucemia = $request->administra_hipoglucemia;
        $paciente->tiene_convulsiones = $request->tiene_convulsiones;
        $paciente->fecha_ultima_cita = $request->fecha_ultima_cita;
        $paciente->nombre_hospital = $request->nombre_hospital;
        $paciente->cedula_representante = $request->cedula_representante;
        $paciente->nombres_representante = $request->nombres_representante;
        $paciente->celular_representante = $request->celular_representante;
        $paciente->solicita_ayuda_fundacion = $request->solicita_ayuda_fundacion;
        $paciente->otra_enfermedad = $request->otra_enfermedad;
        $paciente->cantidad_familia = $request->cantidad_familia;
        $paciente->cantidad_menores_edad = $request->cantidad_menores_edad;
        $paciente->algun_discapacitado_familia = $request->algun_discapacitado_familia;
        $paciente->zona_vive = $request->zona_vive;
        $paciente->tipo_vivienda = $request->tipo_vivienda;
        $paciente->personas_aportan_familia = $request->personas_aportan_familia;
        $paciente->id_ciudad = $request->id_ciudad;
        $paciente->id_diabetes = $request->id_diabetes;
        $paciente->id_insulina_basals = $request->id_insulina_basals;
        $paciente->id_insulina_prandials = $request->id_insulina_prandials;
        $paciente->id_tipo_hospital = $request->id_tipo_hospital;
        $paciente->id_ayuda_fundacion = $request->id_ayuda_fundacion;
        $paciente->id_medico = $request->id_medico;
        $paciente->id_situacion_jefe_hogar = $request->id_situacion_jefe_hogar;
        $paciente->id_problema_diabetes = $request->id_problema_diabetes;
        $paciente->save();
        
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente = Paciente::find($id);
        $ciudades = Ciudad::all();
        $ciudadBD = Ciudad::find($paciente->id_ciudad);
        $diabetes = Diabetes::all();
        $diabetesBD = Diabetes::find($paciente->id_diabetes);
        $provincias = Provincia::all();
        $provinciaBD = Provincia::find($ciudadBD->id_provincia);
        $insulinaBasalPaciente = InsulinaBasal::all();
        $insulinaBasalPacienteBD = InsulinaBasal::find($paciente->id_insulina_basals);
        $insulinaPrandialPaciente = InsulinaPrandial::all();
        $insulinaPrandialPacienteBD = InsulinaPrandial::find($paciente->id_insulina_prandials);
        $tipoHospitalPaciente = TipoHospital::all();
        $tipoHospitalPacienteBD = TipoHospital::find($paciente->id_tipo_hospital);
        $ayudaFundacionPaciente = AyudaFundacion::all();
        $ayudaFundacionPacienteBD = AyudaFundacion::find($paciente->id_ayuda_fundacion);
        $situacionJefeHogars = SituacionJefeHogar::all();
        $situacionJefeHogar = SituacionJefeHogar::all();
        $situacionJefeHogarBD = SituacionJefeHogar::find($paciente->id_situacion_jefe_hogar);
        $medicos = Medico::all();
        $medicoBD = Medico::find($paciente->id_medico);
        $problemaDiabetes = ProblemaDiabetes::all();
        $problemaDiabetesBD = ProblemaDiabetes::find($paciente->id_problema_diabetes);
        return view('formularioregistro.verregistro', compact(
            'paciente',
            'ciudades',
            'diabetes',
            'provincias',
            'provinciaBD',
            'insulinaBasalPaciente',
            'insulinaPrandialPaciente',
            'tipoHospitalPaciente',
            'ayudaFundacionPaciente',
            'ciudadBD',
            'diabetesBD',
            'insulinaBasalPacienteBD',
            'insulinaPrandialPacienteBD',
            'tipoHospitalPacienteBD',
            'situacionJefeHogars',
            'situacionJefeHogar',
            'situacionJefeHogarBD',
            'ayudaFundacionPacienteBD',
            'situacionJefeHogars',
            'medicos',
            'medicoBD',
            'problemaDiabetes',
            'problemaDiabetesBD'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = Paciente::findOrFail($id);
        $ciudades = Ciudad::all();
        $ciudadBD = Ciudad::find($paciente->id_ciudad);
        $provincias = Provincia::all();
        $provinciaBD = Provincia::find($ciudadBD->id_provincia);
        $diabetes = Diabetes::all();
        $diabetesBD = Diabetes::find($paciente->id_diabetes);
        $insulinaBasalPaciente = InsulinaBasal::all();
        $insulinaBasalPacienteBD = InsulinaBasal::find($paciente->id_insulina_basals);
        $insulinaPrandialPaciente = InsulinaPrandial::all();
        $insulinaPrandialPacienteBD = InsulinaPrandial::find($paciente->id_insulina_prandials);
        $tipoHospitalPaciente = TipoHospital::all();
        $tipoHospitalPacienteBD = TipoHospital::find($paciente->id_tipo_hospital);
        $ayudaFundacionPaciente = AyudaFundacion::all();
        $ayudaFundacionPacienteBD = AyudaFundacion::find($paciente->id_ayuda_fundacion);
        $medicos = Medico::all();
        $medicoBD = Medico::find($paciente->id_medico);
        $situacionJefeHogar = SituacionJefeHogar::all();
        $situacionJefeHogarBD = SituacionJefeHogar::find($paciente->id_situacion_jefe_hogar);
        $problemaDiabetes = ProblemaDiabetes::all();
        $problemaDiabetesBD = ProblemaDiabetes::find($paciente->id_problema_diabetes);

        return view('formularioregistro.editarregistro', compact(
            'paciente',
            'ciudades',
            'diabetes',
            'insulinaBasalPaciente',
            'insulinaPrandialPaciente',
            'tipoHospitalPaciente',
            'ayudaFundacionPaciente',
            'ciudadBD',
            'diabetesBD',
            'insulinaBasalPacienteBD',
            'insulinaPrandialPacienteBD',
            'tipoHospitalPacienteBD',
            'ayudaFundacionPacienteBD',
            'provincias',
            'provinciaBD',
            'medicos',
            'medicoBD',
            'situacionJefeHogar',
            'situacionJefeHogarBD',
            'problemaDiabetes',
            'problemaDiabetesBD'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pacienteBD = Paciente::find($id);
        $data = request()->validate([
            'email' => ['required', 'email', Rule::unique('pacientes')->ignore($pacienteBD->id)],
            'cedula' => ['required', Rule::unique('pacientes')->ignore($pacienteBD->id)],
        ], [
            'email.unique' => 'El Email ya existe',
            'cedula.unique' => 'La cédula/pasaporte ya existe'
        ]);

        $paciente['cedula'] = $request['cedula'];
        $paciente['nombres'] = $request['nombres'];
        $paciente['apellidos'] = $request['apellidos'];
        $paciente['fecha_nacimiento'] = $request['fecha_nacimiento'];
        $paciente['email'] = $request['email'];
        $paciente['lugar_nacimiento'] = $request['lugar_nacimiento'];
        $paciente['fecha_diagnostico_diabetes'] = $request['fecha_diagnostico_diabetes'];
        $paciente['celular'] = $request['celular'];
        $paciente['telefono_convencional'] = $request['telefono_convencional'];
        $paciente['valor_hemoglobina'] = $request['valor_hemoglobina'];
        $paciente['fecha_ultimo_examen_hemoglobina'] = $request['fecha_ultimo_examen_hemoglobina'];
        $paciente['veces_mide_glucosa'] = $request['veces_mide_glucosa'];
        $paciente['tiene_registro_glucosa'] = $request['tiene_registro_glucosa'];
        $paciente['puede_medir_glucosa'] = $request['puede_medir_glucosa'];
        $paciente['dosis_insulina_basal'] = $request['dosis_insulina_basal'];
        $paciente['dosis_insulina_prandial'] = $request['dosis_insulina_prandial'];
        $paciente['sintoma_frente_hipoglucemia'] = $request['sintoma_frente_hipoglucemia'];
        $paciente['veces_hipoglucemia_menos'] = $request['veces_hipoglucemia_menos'];
        $paciente['mas_baja_hipoglucemia'] = $request['mas_baja_hipoglucemia'];
        $paciente['administra_hipoglucemia'] = $request['administra_hipoglucemia'];
        $paciente['tiene_convulsiones'] = $request['tiene_convulsiones'];
        $paciente['fecha_ultima_cita'] = $request['fecha_ultima_cita'];
        $paciente['nombre_hospital'] = $request['nombre_hospital'];
        $paciente['cedula_representante'] = $request['cedula_representante'];
        $paciente['nombres_representante'] = $request['nombres_representante'];
        $paciente['celular_representante'] = $request['celular_representante'];
        $paciente['solicita_ayuda_fundacion'] = $request['solicita_ayuda_fundacion'];
        $paciente['otra_enfermedad'] = $request['otra_enfermedad'];
        $paciente['cantidad_familia'] = $request['cantidad_familia'];
        $paciente['cantidad_menores_edad'] = $request['cantidad_menores_edad'];
        $paciente['algun_discapacitado_familia'] = $request['algun_discapacitado_familia'];
        $paciente['zona_vive'] = $request['zona_vive'];
        $paciente['tipo_vivienda'] = $request['tipo_vivienda'];
        $paciente['personas_aportan_familia'] = $request['personas_aportan_familia'];
        $paciente['id_ciudad'] = $request['id_ciudad'];
        $paciente['id_diabetes'] = $request['id_diabetes'];
        $paciente['id_insulina_basals'] = $request['id_insulina_basals'];
        $paciente['id_insulina_prandials'] = $request['id_insulina_prandials'];
        $paciente['id_tipo_hospital'] = $request['id_tipo_hospital'];
        $paciente['id_ayuda_fundacion'] = $request['id_ayuda_fundacion'];
        $paciente['id_medico'] = $request['id_medico'];
        $paciente['id_situacion_jefe_hogar'] = $request['id_situacion_jefe_hogar'];
        $paciente['id_problema_diabetes'] = $request['id_problema_diabetes'];
        Paciente::find($id)->update($paciente);
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paciente = Paciente::findOrFail($id);
        $paciente->delete();
        return redirect('/home');
    }
}
