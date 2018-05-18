@extends('admin.index')
@section('contenido')
<div class="panel-body" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST" action="{{ route('crud.update', $cc->id) }}" enctype="multipart/form-data">
                          {!! method_field('PUT') !!}
                        	{!! csrf_field() !!}
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Nombre(*):</label>
                            <input class="form-control" name="nombre" id="nombre"  required value="{{ $cc->nombre }}">

                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Email(*):</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required value="{{ $cc->email }}">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Telefono:(*)</label>
                            <input type="number" class="form-control" name="telefono" id="telefono" placeholder="Telefono" required value="{{ $cc->telefono }}">
                          </div>

                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>
						                <a href="{{ route('crud.index') }}"><button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button></a>
                          </div>
                        </form>
                    </div>
@stop
