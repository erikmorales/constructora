@extends('layouts.panel')
@push('css-header')
<style>
    #signature-pad {
      min-height:200px;
      border: 1px solid #000;
      }
    #signature-pad canvas {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background: #fff;
    }
</style>
<link rel="stylesheet" href="{{asset('css/select2.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/select2-bootstrap4.min.css')}}" />
<meta name="csrf-token" content="{{ csrf_token() }}">
@endpush
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header">
          <h6>Ticket #{{ $n_ticket }}</h6>
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
                        <div class="form-group row">
                            <label for="foreman_signature" class="col-sm-3 col-form-label col-form-label-sm">Foreman Signature</label>
                            <div class="col-sm-9">
                                <div class="btn btn-pill btn-primary mt-0 btn-sm signature" data-title="Foreman Signature" data-id_img="img_signature_fore" data-id_img_input="input_signature_fore">Add Signature</div>
                                <img class="img-thumbnail" id="img_signature_fore">
                                <input type="hidden" id="input_signature_fore">
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
                                     <th scope="col" width="40%">CLASS</th>
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
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="supername_signature" class="col-sm-5 col-form-label col-form-label-sm">Surperintendent's Signature</label>
                                    <div class="col-sm-7">
                                        <div class="btn btn-pill btn-primary mt-0 btn-sm signature" data-title="Surperintendent's Signature" data-id_img="img_signature_super" data-id_img_input="input_signature_super">Add Signature</div>
                                        <img class="img-thumbnail" id="img_signature_super">
                                        <input type="hidden" id="input_signature_super">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="date_super" class="col-sm-4 col-form-label col-form-label-sm">Date</label>
                                    <div class="col-sm-8">
                                      <input type="date" name="date_super" id="date_super" class="form-control form-control-sm">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="date_super" class="col-sm-5 col-form-label col-form-label-sm">NTE Price</label>
                                    <div class="col-sm-7">
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
<div id="modal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body bg-dark">
            <input type="hidden" id="id_signature">
            <input type="hidden" id="id_signature_input">
            <div id="signature-pad"><canvas style="border:1px solid #000" id="sign"></canvas></div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger btn-sm" id="guardar_firma">Save Signature</button>
            <button type="button" class="btn btn-success btn-sm" id="limpiar">Clear</button>
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
  </div>
@endsection
@push('javascript-form')
<script src="{{asset('js/select2.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var wrapper = document.getElementById("signature-pad");
    var canvas = wrapper.querySelector("canvas");

    function resizeCanvas() {
        var ratio =  Math.max(window.devicePixelRatio || 1, 1);

        canvas.width = canvas.offsetWidth * ratio;
        canvas.height = canvas.offsetHeight * ratio;
        canvas.getContext("2d").scale(ratio, ratio);
    }
    window.onresize = resizeCanvas;
    var signaturePad;
    $(document).on('click', '.signature', function(){
        $('#modal').modal('show');
        $('.modal-title').text($(this).data("title"));
        $("#id_signature").val($(this).data("id_img"))
        $("#id_signature_input").val($(this).data("id_img_input"))
        resizeCanvas();
        signaturePad = new SignaturePad(canvas, {
            backgroundColor: 'rgb(255, 255, 255)', // necessary for saving image as JPEG; can be removed is only saving as PNG or SVG
            penColor: 'rgb(0, 0, 0)'        
        });
    });
    $(document).on('click', '#guardar_firma', function () {
        if (signaturePad.isEmpty()) {
            return alert("Please provide a signature first.");
        }
        var data = signaturePad.toDataURL('image/jpeg');
        console.log(data);
        $(`#${$("#id_signature").val()}`).attr('src',data);
        $(`#${$("#id_signature_input").val()}`).val(data);
        $("#modal").modal("hide");
    });
    $(document).on('click', '#limpiar', function () {
        signaturePad.clear();
    });
    
    td_material = `
        <tr>
            <td scope="row"><input type="number" name="" id="" step="1.0" min="0" value="0" class="form-control form-control-sm"></td>
            <td><select class="form-control select_material" name="material_id[]" style="width:100%"></select></td>
            <td> <div class="ms-btn-icon btn-danger btn-sm remove_material"><i class="fas fa-trash-alt mr-0"></i></div> </td>
        </tr>
    `;
    td_class = `
        <tr>
            <td><input type="number" name="" id="" step="1.0" min="0" value="0" class="form-control form-control-sm"></td>
            <td><select class="form-control select_class" name="class_id[]" style="width:100%"></select></td>
            <td><input type="time" name="" id="" class="form-control form-control-sm" value="00:00"></td>
            <td><input type="time" name="" id="" class="form-control form-control-sm" value="00:00"></td>
            <td><input type="time" name="" id="" class="form-control form-control-sm" value="00:00" readonly></td>
            <td> <div class="ms-btn-icon btn-danger btn-sm remove_class"><i class="fas fa-trash-alt mr-0"></i></div> </td>
        </tr>
    `;
    $(".add-material").on('click', function () {
        $('#none_tr_mat').hide();
        $("#table-material > tbody tr:last").after(td_material);
        load_select_material();
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
        load_select_class();
    });
    $(document).on("click", ".remove_class", function(){
        $(this).parents("tr").remove();
        if($('#table-class > tbody tr').length == 1)
        {
            $('#none_tr_class').show();
        }
    });
    function load_select_material() {
        $('.select_material').select2({
            theme: "bootstrap4",
            ajax: { 
                url: "{{ route('get_materiales',['id'=>$id]) }}",
                type: "post",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        searchTerm: params.term // search term
                    };
                },
                processResults: function (response) {
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });
    }
    function load_select_class() {
        $('.select_class').select2({
            theme: "bootstrap4",
            ajax: { 
                url: "{{ route('get_class_workers') }}",
                type: "post",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        searchTerm: params.term // search term
                    };
                },
                processResults: function (response) {
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });
    }
    
</script>
@endpush