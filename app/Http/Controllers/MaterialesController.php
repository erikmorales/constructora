<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;
use DataTables;

class MaterialesController extends Controller
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
            $data = Material::select('materiales.*','proyectos.Nombre','categoria_material.Nombre as Categoria')
            ->where('proyectos.Emp_ID',auth()->user()->Empleado_ID)
            ->where('proyectos.Project_Manager_ID',auth()->user()->Empleado_ID)
            ->orWhere('proyectos.Coordinador_Obra_ID',auth()->user()->Empleado_ID)
            ->orWhere('proyectos.Foreman_ID',auth()->user()->Empleado_ID)
            ->orWhere('proyectos.Coordinador_ID',auth()->user()->Empleado_ID)
            ->orWhere('proyectos.Manager_ID',auth()->user()->Empleado_ID)
            ->join('proyectos','materiales.Pro_ID','proyectos.Pro_ID')
            ->join('categoria_material','materiales.Cat_ID','categoria_material.Cat_ID')
            ->get();
            
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('acciones', function($data){
                      $button = '<a href="#"><i class="fas fa-clipboard-list ms-text-primary"></i></a>';
                      $button .= '<a href="'.route('editmateriales').'"><i class="fas fa-pencil-alt ms-text-primary"></i></a>';
                      $button .= '<a href="#"><i class="far fa-trash-alt ms-text-danger" data-toggle="modal" data-target=".bs-example-modal-lg"></i></a>';
                        return $button;
                    })
                    ->rawColumns(['acciones'])
                    ->make(true);
        }
        return view('panel.materiales.list');
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.materiales.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit()
    {
        return view('panel.materiales.edit');
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
