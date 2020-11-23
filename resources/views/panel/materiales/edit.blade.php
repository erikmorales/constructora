@extends('layouts.panel')
@push('css-header')

@endpush
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header">
          <h6>Edit Materials</h6>
        </div>
        <div class="ms-panel-body">
            <div class="col-xl-12 col-md-12">
          <div class="ms-panel">
            
            <div class="ms-panel-body">
              <form class="needs-validation" novalidate>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom010">Producto</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="validationCustom010" placeholder=""  required>

                    </div>
                  </div>

                    <div class="col-md-6 mb-3">
                      <label for="validationCustom020">Categoria</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="validationCustom020" placeholder="" required>
                        <div class="valid-feedback">
                          
                        </div>
                      </div>
                    </div>
                  </div>

                <div class="form-row">
                  <div class="col-md-6 mb-2">
                    <label for="validationCustom040">Denominacion</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="validationCustom040" placeholder="" required>

                    </div>
                  </div>

                  <div class="col-md-6 mb-2">
                    <label for="validationCustom030">Precio</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="validationCustom030" placeholder="" required>

                    </div>
                  </div>
                </div>


                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom050">Cantidad</label>
                    <div class="input-group">
                      <input type="" class="form-control" id="validationCustom050" placeholder=""  required>

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
