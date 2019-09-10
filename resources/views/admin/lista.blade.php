@extends('layouts.app')
@section('titulo')
    Administrar usuarios
@endsection
@section('contenido')
@include('usuario.navegacion')
<div class="container">
   <h1 class="display-5">Usuarios</h1>
   <a href="{{ url('register') }}" class="btn btn-success">Nuevo <i class="fa fa-plus-circle"></i></a>
   <table class="table table-hover table-bordered table-striped" id="registros">
       <thead>
           <tr>
               <th>Nombre</th>
               <th>Correo</th>
               <th>Admin</th>
               <th></th>
           </tr>
       </thead>
       <tbody>
           @foreach ($usuarios as $usuario)
               <tr>
                   <td>{{ $usuario->name }}</td>
                   <td>{{ $usuario->email }}</td>
                   <td>{!! $usuario->isAdmin ? '<i style="color:green" class="fa fa-check-circle"></i>' : '<i style="color:red" class="fa fa-times-circle"></i>' !!}</td>
                   <td><a href="#" class="btn btn-info"><i class="fa fa-cog fa-spin"></i></a></td>
               </tr>
           @endforeach
       </tbody>
   </table>
</div>



  <script>
        $(document).ready(function(){
            var tabla = $('#registros').DataTable({
                "order": [[ 0, "desc" ]],
                    "language": {
                        "emptyTable":     "Sin datos",
                        "info":           "Mostrando del _START_ al _END_ de _TOTAL_ resultados",
                        "infoEmpty":      "Mostrando 0 de 0 de los 0 resultados",
                        "infoFiltered":   "(Filtrado de _MAX_ resultados)",
                        "infoPostFix":    "",
                        "thousands":      ",",
                        "lengthMenu":     "Mostrar hasta _MENU_ resultados por página",
                        "loadingRecords": "Cargando...",
                        "processing":     '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>',
                        "search":         "<i class='fa fa-search'></i> Buscar:",
                        "zeroRecords":    "No hay resultados para la búsqueda",
                        "paginate": {
                            "first":      "Primero",
                            "last":       "Último",
                            "next":       "<i class='fa fa-arrow-right'></i>",
                            "previous":   "<i class='fa fa-arrow-left'></i>"
                        },
                        "aria": {
                            "sortAscending":  ": Orden ascendente",
                            "sortDescending": ": Orden descendente"
                        }
                    },
                });
        })
    </script>

@endsection
