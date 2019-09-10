@extends('layouts.app')
@section('titulo')
    Inicio
@endsection
@section('contenido')
@include('usuario.navegacion')
<div class="container">
   <h1 class="display-5">Inventario</h1>
   <table class="table table-hover table-bordered table-striped" id="registros">
       
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
