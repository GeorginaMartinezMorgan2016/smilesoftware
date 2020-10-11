@extends('Plantilla.Plantilla')

<!DOCTYPE html>
<html lang="en">
@section('Titulo','Paciente')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <style>

 #table{




 }

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 20px;
  text-align: left;
  background-color: #F0FFFF;
}

tr:nth-child(even) {
  background-color: #00CED1;
}

btn{
text-align: center;

}



#lista{
  background-color: #F0FFFF;
  

}

 #lista:hover{
   border: 1px solid #FF4500;
   color: hotpink;
 

 }

</style>

</head>
@section('contenido')
<body>
@if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif

    <div class="container">

    <nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">Directorio de Pacientes</span>
</nav>

</div>

<h3>Directorio de Pacientes </h3>
<div class="item-input-inset" align="right">
<label class="item-input-wrapper" > 
       <button type="button" class="btn btn-secondary">Configuraciones de Pacientes</button>
       <button type="button" class="btn btn-secondary">Descargar</button>
       <a href="http://smilesoftware.test/paciente/nuevo" <button link rel="stylesheet" type="button" class="btn btn-success">Nuevo Paciente </button> </a>  
</div>
<div class="item-input-inset">
       <label class="item-input-wrapper"> 
    <input type="text" placeholder="Numero" />
    <select  id="sel1">
     <option>Tratamiento</option>
     <option>Id. Paciente</option>
     <option>Numero Interno</option>
     </select>
           <button type="button" class="btn btn-success">Buscar </button>
       </label>   
</div>

<DIV align="right">
<a href="" align="right">A</a>
<a href="" align="right">B</a>
<a href="" align="right">C</a>
<a href="" align="right">D</a>
<a href="" align="right">E</a>
<a href="" align="right">F</a>
<a href="" align="right">G</a>
<a href="" align="right">H</a>
<a href="" align="right">I</a>
<a href="" align="right">J</a>
<a href="" align="right">K</a>
<a href="" align="right">L</a>
<a href="" align="right">LL</a>
<a href="" align="right">M</a>
<a href="" align="right">N</a>
<a href="" align="right">O</a>
<a href="" align="right">P</a>
<a href="" align="right">Q</a>
<a href="" align="right">R</a>
<a href="" align="right">S</a>
<a href="" align="right">T</a>
<a href="" align="right">U</a>
<a href="" align="right">V</a>
<a href="" align="right">W</a>
<a href="" align="right">X</a>
<a href="" align="right">Y</a>
<a href="" align="right">Z</a>


</DIV>

<div  class="container">
 <div class="list-group">
 
<table id="datatable" class="table" id="table ">
<thead>
  <tr   class="table-info">
    <th  class="table-primary">Nº</th>
    <th class="table-primary">Nombre</th>
    <th class="table-primary">Apellidos</th>
    <th class="table-primary">Identidad</th>
    <th class="table-primary">Accion</th>
  </tr>
  </thead>
  <tr>
  <tbody>
      @foreach($pacientes as $paciente)
    <td><a  class="btn btn-outline-info"  href="/paciente/{{ $paciente->id}}"  id="lista">{{$paciente->id}}</a></td>
    <td>{{$paciente->nombres}}</td>
    <td>{{$paciente->apellidos}}</td>
    <td>{{$paciente->identidad}}</td>
    <td>
    <a  class="btn btn-warning"  href="/paciente/{{ $paciente->id}}/editar">Editar</a>
    <button type="button" class="btn btn-danger">Eliminar</button>
    </td>
    <tr>
    @endforeach
    </tbody>
</table>

</div>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
$(document).ready( function () {
    $('#datatable').DataTable();
} );


</script>
</body>

@endsection
</html>