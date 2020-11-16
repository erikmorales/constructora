@extends('layouts.panel')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header ms-panel-custome">
          <h6>Tickets</h6>
          <a class="btn btn-pill btn-primary btn-sm" href="{{ route('crear.ticket',['id'=>$id]) }}">Crear Ticket</a>
        </div>
        <div class="ms-panel-body">
          <div class="table-responsive">
            <table id="list-ticket" class="table table-striped thead-primary w-100">
              <thead>
                <tr>
                    <th>ID</th>
                    <th>Num</th>
                    <th>Fecha</th>
                    <th>Horario</th>
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
@endsection
@push('datatable')
<script src="{{ asset('assets/js/datatables.min.js') }}"></script>
<script>
    $('#list-ticket').DataTable( {
        processing: true,
        serverSide: true,
        ajax: "{{ route('listar.tickets',['id'=>$id]) }}",
        order: [[ 0, "desc" ]],
        columns: [
            { data: "ti_id", name: "ti_id"},
            { data: "num", name: "num" },
            { data: "fecha", name: "fecha" },
            { data: "horario", name: "horario" },
            { data: "descripcion", name: "descripcion" },
            { data: 'acciones', name: 'acciones', orderable: false }
        ],
    });
</script>
@endpush