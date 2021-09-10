@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="pull-right">
        {{-- <a class="btn btn-success" href="{{ url('crearformulario') }}"> Crear nuefo registro</a> --}}
        <a class="btn btn-success" href="{{ route('formulario.create') }}"> Crear nuevo registro</a>
    </div>
    <br>
</div>
  </div>
    <div class="row">
        <div class="col-md-12">
        <div class="card">
  <div class="card-body">
  <h5 class="card-title">Lista de Registros</h5>
  <div class="table-responsive">
  <table class="table table-striped">
  <thead>
    <tr> 
      <th scope="col">Opciones</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">Cedula</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
    </tr>
  </thead>
  <tbody>
    @foreach($pacientes as $paciente)
    <tr>
      {{-- <td><a class="btn btn-warning" href="{{ url('editarformulario/'.$paciente->id) }}">Editar paciente</a></td> --}}
      {{-- <td><a class="btn btn-warning" href="{{ route('formulario.edit', $paciente->id) }}">Editar paciente</a></td> --}}
      <td><a class="btn btn-primary" href="{{ route('formulario.show', $paciente->id) }}">Ver paciente</a></td>
      <td><a href="{{ route('formulario.edit', $paciente->id)}}" class="btn btn-primary">Editar</a></td>
      <td>
        <form action="{{ route('formulario.destroy', $paciente->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
      <td>{{$paciente->cedula}}</td>
      <td>{{$paciente->nombres}}</td>
      <td>{{$paciente->apellidos}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
  </div>
  </div>
</div>

@endsection



