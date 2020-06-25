@extends('admintemplate.main')

@section('contenido')
<script language="JavaScript">
function Confirm() {
if(confirm('¿Estas seguro de eliminar este registro?')){
  return true;
}
else{
  return false;
}
}
</script>
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Usuarios</h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>No. Usuario</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Tipo Usuario</th>
            <th>Email</th>
            <th>Contraseña</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($usuarios as $user)
          <tr>
            <td>{{$user->idusuario}}</td>
            <td><center><img src = "{{asset('storage/app/public/'.$user->foto)}}" height=50 width=50></center></td>
            <td>{{$user->nombre}} {{$user->apellidopu}} {{$user->apellidomu}}</td>
            <td>{{$user->tipo}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->contraseña}}</td>
            <td><center><a class="btn btn-success" href="{{URL::action('UsuariosController@editaUsuario',['idusuario'=>$user->idusuario])}}"><i class="fa fa-edit"></i> Editar</a></center></td>
            <td><center><a class="btn btn-danger" onclick="return Confirm()" href="{{URL::action('UsuariosController@eliminaUsuario',['idusuario'=>$user->idusuario])}}"><i class="fa fa-trash"></i> Eliminar</a></center></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@stop