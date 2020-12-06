@extends('layouts.panel')
@push('css-header')
<!-- Page Specific Css (Datatables.css) -->
 <link href="{{ asset('assets/css/datatables.min.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header ms-panel-custome">
          <h6>Razon del trabajo</h6>
          <a class="btn btn-pill btn-primary btn-sm"
           href="{{ route('tipo_crear') }}">Add Razon del trabajo</a>
        </div>
        <div class="ms-panel-body">
          <div class="table-responsive">
            <table id="list-razon" class="table table-striped thead-primary w-100">
              <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>                  
                    <th>Acciones</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </div>
    </div>
  </div>
</div>
<!-- Large modal -->
<div class="modal fade bs-example-modal-lg" id="modal1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span></button>
        <h4 class="modal-title" id="myModalLabel">Vas a borrar la Razon del Trabajo?</h4>
      </div>
      <div class="modal-body">
        <p>Seguro que desea borrar el registro seleccionado</p>
      </div>
      <div class="modal-footer">  
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-danger">Borrar</button>             
      </div>
    </div>
  </div>
</div>
<!-- Large modal -->
@endsection
@push('datatable')
<script src="{{ asset('assets/js/datatables.min.js') }}"></script>
<script>
    $('#list-razon').DataTable( {
        processing: true,
        serverSide: true,
        ajax: "{{ route('listar.razon') }}",
        order: [[ 0, "desc" ]],
        columns: [
            { data: "id", name: "id"},
            { data: "nombre", name: "nombre" },
            { data: "descripcion", name: "descripcion" },
            { data: 'acciones', name: 'acciones', orderable: false }
        ],
    });
</script>
<script>
  
</script>
@endpush