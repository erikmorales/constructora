@extends('layouts.panel')
@push('css-header')

@endpush
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header">
          <h6>Edit Razon</h6>
        </div>
        <div class="ms-panel-body">
            <div class="col-xl-12 col-md-12">
          <div class="ms-panel">
            
            <div class="ms-panel-body">
              <form action="{{ route("Razontrabajo.store") }}" method="PUT" class="needs-validation" novalidate>
                @csrf
                
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom010">Nombre</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="nombre" id="nombre" placeholder=""  required>

                    </div>
                  </div>

                    <div class="col-md-6 mb-3">
                      <label for="validationCustom020">Descripcion</label>
                      <div class="input-group">
                        <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="" required>
                        <div class="valid-feedback">
                          
                        </div>
                      </div>
                    </div>
                  </div>

                <a class="btn btn-primary" href="javascript:
                  history.go(-1)">Regresar</a>
                <button type="submit" class="btn btn-success">Guardar</button>
                </form>

            </div>
          </div>
        </div>
        </div>
    </div>
  </div>
</div>
@endsection
