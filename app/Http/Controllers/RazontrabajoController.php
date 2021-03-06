<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Razon_Trabajo;
use DataTables;
use App\Http\Requests\StoreRazonPost;

class RazontrabajoController extends Controller
{
    public function __construct()
    {  
        $this->middleware('auth');   
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()){
            $data = Razon_Trabajo::select('razontrabajo.*')
            ->get();
            
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('acciones', function($data){
                        $button = '<a href="'.route('listar.razon',['id'=>$data->id]).'">
                        <i class="fas fa-clipboard-list ms-text-primary"></i>
                        </a>';
                $button .= '<a href="'.route('editrazon',['id'=>$data->id]).'"><i class="fas fa-pencil-alt ms-text-warning"></i></a>';
                        $button .= '<a href="#"><i class="far fa-trash-alt ms-text-danger" data-toggle="modal" data-target=".bs-example-modal-lg"></i></a>';
                        return $button;
                        
                    })
                    ->rawColumns(['acciones'])
                    ->make(true);
        }
        return view('panel.Razontrabajo.list');
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.Razontrabajo.new');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRazonPost $request)
    {
        
        Razon_Trabajo::create($request->validated());
        return back()->with('status', 'Creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Razon_Trabajo $id)
    {
        return view('panel.Razontrabajo.edit',['id' => $id]);
        //return view('dashboard.donantes.edit',['id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
