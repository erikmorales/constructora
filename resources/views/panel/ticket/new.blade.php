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
                              <input type="text" class="form-control form-control-sm" id="general" placeholder="General Contractor" value="{{ $proyecto->Contratista_General }}" disabled="disabled">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ptw" class="col-sm-3 col-form-label col-form-label-sm">PTW Job</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control form-control-sm" id="ptw" placeholder="PTW Job" value="{{ $n_ticket }}" disabled="disabled">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="project" class="col-sm-3 col-form-label col-form-label-sm">Project Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control form-control-sm" id="project" placeholder="Project Name" value="{{ $proyecto->Nombre }}" disabled="disabled">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-sm-3 col-form-label col-form-label-sm">Project Address</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control form-control-sm" id="address" placeholder="Project Address" value="{{ $address }}" disabled="disabled">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="date_work" class="col-sm-3 col-form-label col-form-label-sm">Date of Work</label>
                            <div class="col-sm-9">
                              <input type="date" class="form-control form-control-sm" id="date_work" placeholder="Date of Work" value="{{ date('Y-m-d') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="foreman_name" class="col-sm-3 col-form-label col-form-label-sm">Foreman Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control form-control-sm" id="foreman_name" placeholder="Foreman Name" value="{{ $name }}">
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
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-hover thead-light" id="table-material">
                               <thead>
                                  <tr>
                                     <th scope="col">QTY</th>
                                     <th>Material Description</th>
                                     <th width="1%" scope="col"></th>
                                  </tr>
                               </thead>
                               <tbody>
                                   <tr id="none_tr_mat"> <td colspan="3" class="text-center">I don't add anything</td> </tr>
                               </tbody>
                               <tfoot>
                                   <tr>
                                       <td colspan="3" class="p-0">
                                           <div class="btn btn-sm btn-block btn-success mt-0 add-material">Add material</div>
                                       </td>
                                   </tr>
                               </tfoot>
                            </table>
                         </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-hover thead-light" id="table-class">
                               <thead>
                                  <tr>
                                     <th scope="col">N° workers</th>
                                     <th scope="col">CLASS</th>
                                     <th scope="col">Total Reg Hours</th>
                                     <th scope="col">Total Premium Hours</th>
                                     <th scope="col">Total Out Hours</th>
                                     <th width="1%"></th>
                                  </tr>
                               </thead>
                               <tbody>
                                <tr id="none_tr_class"> <td colspan="6" class="text-center">I don't add anything</td> </tr>
                               </tbody>
                               <tfoot>
                                    <tr>
                                        <td colspan="6  " class="p-0">
                                            <div class="btn btn-sm btn-block btn-success mt-0 add-class">Add worker</div>
                                        </td>
                                    </tr>
                                </tfoot>
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
@push('javascript-form')
<script>
    td_material = `
        <tr>
            <td scope="row"><input type="number" name="" id="" step="1.0" min="0" value="0" class="form-control form-control-sm"></td>
            <td><input type="text" name="" id="" class="form-control form-control-sm"></td>
            <td> <div class="ms-btn-icon btn-danger btn-sm remove_material"><i class="fas fa-trash-alt mr-0"></i></div> </td>
        </tr>
    `;
    td_class = `
        <tr>
            <td><input type="number" name="" id="" step="1.0" min="0" value="0" class="form-control form-control-sm"></td>
            <td><input type="text" name="" id="" class="form-control form-control-sm" readonly></td>
            <td><input type="time" name="" id="" class="form-control form-control-sm" value="00:00"></td>
            <td><input type="time" name="" id="" class="form-control form-control-sm" value="00:00"></td>
            <td><input type="time" name="" id="" class="form-control form-control-sm" value="00:00" readonly></td>
            <td> <div class="ms-btn-icon btn-danger btn-sm remove_class"><i class="fas fa-trash-alt mr-0"></i></div> </td>
        </tr>
    `;
    $(".add-material").on('click', function () {
        $('#none_tr_mat').hide();
        $("#table-material > tbody tr:last").after(td_material);
    });
    $(document).on("click", ".remove_material", function(){
        $(this).parents("tr").remove();
        if($('#table-material > tbody tr').length == 1)
        {
            $('#none_tr_mat').show();
        }
    });

    $(".add-class").on('click', function () {
        $('#none_tr_class').hide();
        $("#table-class > tbody tr:last").after(td_class);
    });
    $(document).on("click", ".remove_class", function(){
        $(this).parents("tr").remove();
        if($('#table-class > tbody tr').length == 1)
        {
            $('#none_tr_class').show();
        }
    });
</script>
@endpush