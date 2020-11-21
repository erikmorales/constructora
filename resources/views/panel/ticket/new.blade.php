@extends('layouts.panel')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header">
          <h6>Ticket #2253</h6>
        </div>
        <div class="ms-panel-body">
            <form>
                <p class="ms-directions">Extra Work Orden</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="general" class="col-sm-3 col-form-label col-form-label-sm">General Contractor</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control form-control-sm" id="general" placeholder="General Contractor" disabled="disabled">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ptw" class="col-sm-3 col-form-label col-form-label-sm">PTW Job</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control form-control-sm" id="ptw" placeholder="PTW Job" disabled="disabled">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="project" class="col-sm-3 col-form-label col-form-label-sm">Project Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control form-control-sm" id="project" placeholder="Project Name" disabled="disabled">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-sm-3 col-form-label col-form-label-sm">Project Address</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control form-control-sm" id="address" placeholder="Project Address" disabled="disabled">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="date_work" class="col-sm-3 col-form-label col-form-label-sm">Date of Work</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control form-control-sm" id="date_work" placeholder="Date of Work">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="foreman_name" class="col-sm-3 col-form-label col-form-label-sm">Foreman Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control form-control-sm" id="foreman_name" placeholder="Foreman Name">
                            </div>
                        </div>
                        <ul class="ms-list d-flex">
                            <li class="ms-list-item pl-0">
                              <label class="ms-checkbox-wrap">
                                <input type="radio" name="horario" value="" checked="">
                                <i class="ms-checkbox-check"></i>
                              </label>
                              <span> Day </span>
                            </li>
                            <li class="ms-list-item">
                              <label class="ms-checkbox-wrap">
                                <input type="radio" name="horario" value="">
                                <i class="ms-checkbox-check"></i>
                              </label>
                              <span> Night </span>
                            </li>
                            <li class="ms-list-item">
                              <label class="ms-checkbox-wrap">
                                <input type="radio" name="horario" value="">
                                <i class="ms-checkbox-check"></i>
                              </label>
                              <span> Overtime </span>
                            </li>
                            <li class="ms-list-item">
                                <label class="ms-checkbox-wrap">
                                  <input type="radio" name="horario" value="">
                                  <i class="ms-checkbox-check"></i>
                                </label>
                                <span> Premium Time </span>
                              </li>
                          </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="ms-directions">DESCRIPCION OF WORK: What? / Where? / Why?</p>
                        <textarea name="descripcion" id="" rows="5" class="form-control mb-3"></textarea>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label for="what" class="col-sm-2 col-form-label col-form-label-sm">What?</label>
                                    <div class="col-sm-10">
                                      <select name="" id="" class="form-control form-control-sm"></select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label for="where" class="col-sm-2 col-form-label col-form-label-sm">Where?</label>
                                    <div class="col-sm-10">
                                        <select name="" id="" class="form-control form-control-sm"></select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label for="why" class="col-sm-2 col-form-label col-form-label-sm">Why?</label>
                                    <div class="col-sm-10">
                                        <select name="" id="" class="form-control form-control-sm"></select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group row">
                            <div class="col-md-12">
                                    <label for="material" class="col-sm-2 col-form-label col-form-label-sm">Material</label>
                                    <select name="" id="" class="form-control form-control-sm"></select>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover thead-light">
                               <thead>
                                  <tr>
                                     <th scope="col">QTY</th>
                                     <th scope="col">Material Description</th>
                                  </tr>
                               </thead>
                               <tbody>
                                  <tr>
                                     <th scope="row"><input type="number" name="" id="" step="1.0" min="0" value="0" class="form-control form-control-sm"></th>
                                     <td><input type="text" name="" id="" class="form-control form-control-sm" readonly></td>
                                  </tr>
                               </tbody>
                            </table>
                         </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group row">
                            <div class="col-md-10">
                                    <label for="material" class="col-sm-2 col-form-label col-form-label-sm">CLASS</label>
                                    <select name="" id="" class="form-control form-control-sm">
                                      <option value="">Seleccione...</option>
                                            <option value="">Project Manager</option>
                                            <option value="">Superintendent</option>
                                            <option value="">Foreman</option>
                                            <option value="">Painter</option>
                                            <option value="">Paper hander</option>
                                            <option value="">Finisher</option>
                                            <option value="">Apprentice</option>
                                            <option value="">Carpenter</option>
                                            <option value="">Truck Driver/gas</option>
                                    </select>
                                </div>
                            <label for="class" class="col-sm-2 col-form-label col-form-label-sm"><button type="button" class="btn btn-success">Agregar</button></label>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover thead-light">
                               <thead>
                                  <tr>
                                     <th scope="col">N° workers</th>
                                     <th scope="col">CLASS</th>
                                     <th scope="col">Total Reg Hours</th>
                                     <th scope="col">Total Premium Hours</th>
                                     <th scope="col">Total Out Hours</th>
                                  </tr>
                               </thead>
                               <tbody>
                                  <tr>
                                    <th><input type="number" name="" id="" step="1.0" min="0" value="0" class="form-control form-control-sm"></th>
                                    <td><input type="text" name="" id="" class="form-control form-control-sm" readonly></td>
                                    <td><input type="time" name="" id="" class="form-control form-control-sm" value="00:00"></td>
                                    <td><input type="time" name="" id="" class="form-control form-control-sm" value="00:00"></td>
                                    <td><input type="time" name="" id="" class="form-control form-control-sm" value="00:00" readonly></td>
                                  </tr>
                               </tbody>
                            </table>
                         </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="ms-directions">Signer verifies PWT, has completed the work stated above under my supervision. Time and material listed above are accurate and approved</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="supername" class="col-sm-4 col-form-label col-form-label-sm">Surperintendent's Name</label>
                                    <div class="col-sm-8">
                                      <input type="text" name="supername" id="supername" class="form-control form-control-sm">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row">
                                    <label for="date_super" class="col-sm-2 col-form-label col-form-label-sm">Date</label>
                                    <div class="col-sm-10">
                                      <input type="date" name="date_super" id="date_super" class="form-control form-control-sm">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row">
                                    <label for="date_super" class="col-sm-4 col-form-label col-form-label-sm">NTE Price</label>
                                    <div class="col-sm-8">
                                        <label class="ms-checkbox-wrap">
                                            <input type="checkbox" value="">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
@endsection
@push('datatable')
<script>

</script>
@endpush