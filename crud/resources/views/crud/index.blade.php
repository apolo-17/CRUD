@extends('admin.index')
@section('contenido')
<div class="box-header with-border">
<h1 class="box-title"> <a href="{{ route('crud.create') }}"><button class="btn btn-success" id="btnagregar" onclick=""><i class="fa fa-plus-circle"></i> Agregar</button></a></h1>
    <div class="box-tools pull-right">
    </div>
</div>
<div class="">
  <div class="box-header with-border">

	                   <div class="panel-body table-responsive" id="listadoregistros">

                        
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Opciones</th>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Time-Stamp</th>
                          </thead>
                          <tbody>
                            @foreach ($cc as $art)
                          <tr>

                          <td class="sorting_1"><a href="{{ route('crud.edit', $art->id) }}"><button class="btn btn-warning"><i class="fa fa-pencil"></i></button></a>
                            <form style="display:inline" method="POST" action="{{ route('crud.destroy', $art->id) }}">
                              {!! csrf_field() !!}
                              {!! method_field('DELETE') !!}
                              <button class="btn btn-danger" ><i class="fa fa-close"></i></button>
                            </form>
                          </td>

                            <td><a href="{{ route('crud.show', $art->id ) }}">{{ $art->id }}</td>
                            <td>{{ $art->nombre }}</td>
                            <td>{{ $art->email }}</td>
                            <td>{{ $art->telefono }}</td>
                            <td>{{ $art->created_at }}</td>

                          </tr>
                          @endforeach
                          </tbody>
                          <tfoot>
                            <th>Opciones</th>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Time-Stamp</th>

                          </tfoot>
                        </table>
                    </div>
</div>
@stop
