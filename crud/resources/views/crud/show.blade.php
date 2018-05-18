@extends('admin.index')
@section('contenido')
<div class="panel-body" id="formularioregistros">
                        <form name="formulario" id="formulario">

                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Nombre:</label>
                            <h4>{{ $cc->nombre }}</h4>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Email:</label>
                            <h4>{{ $cc->email }}</h4>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Telefono:</label>
                            <h4>{{ $cc->telefono }}</h4>
                          </div>

                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">

						                <a href="{{ route('crud.index') }}"><button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Regresar</button></a>

                          </div>
                        </form>
                    </div>
@stop
