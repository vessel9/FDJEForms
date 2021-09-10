@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <h1>Index formulario de registro</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
          <div class="pull-right">
            <a class="btn btn-success" href="{{ route('formulario.create') }}"> Create New Product</a>
        </div>
    </div>
    </div>
</div>
@endsection