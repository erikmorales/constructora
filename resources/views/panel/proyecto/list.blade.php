@extends('layouts.panel')
@push('css-header')
<!-- Page Specific Css (Datatables.css) -->
 <link href="{{ asset('assets/css/datatables.min.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header">
          <h6>Proyects</h6>
        </div>
        <div class="ms-panel-body">
          <div class="table-responsive">
            <table id="list-proyect" class="table table-striped thead-primary w-100">
              <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>Ciudad</th>
                    <th>Empresa</th>
                    <th>Estatus</th>
                    <th>Fecha_Inicio</th>
                    <th>Fecha_Fin</th>
                    <th>Tickets</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection
@push('datatable')
<script src="{{ asset('assets/js/datatables.min.js') }}"></script>
<script>
    $('#list-proyect').DataTable( {
        processing: true,
        serverSide: true,
        ajax: "{{ route('listar.proyectos') }}",
        order: [[ 0, "desc" ]],
        columns: [
            { data: "Pro_ID", name: "Pro_ID"},
            { data: "Nombre", name: "Nombre" },
            { data: "Estado", name: "Estado" },
            { data: "Ciudad", name: "Ciudad" },
            { data: "Empresa", name: "Empresa" },
            { data: "Nombre_Estatus", name: "Nombre_Estatus" },
            { data: "Fecha_Inicio", name: "Fecha_Inicio" },
            { data: "Fecha_Fin", name: "Fecha_Fin" },
            { data: 'acciones', name: 'acciones', orderable: false }
        ],
    });
</script>
@endpush