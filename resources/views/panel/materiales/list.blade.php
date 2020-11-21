@extends('layouts.panel')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header ms-panel-custome">
          <h6>Materials</h6>
          <a class="btn btn-pill btn-primary btn-sm" >Register material</a>
        </div>
        <div class="ms-panel-body">
          <div class="table-responsive">
            <table id="list-proyect" class="table table-striped thead-primary w-100">
              <thead>
                <tr>
                    <th>ID</th>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Color</th>
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
