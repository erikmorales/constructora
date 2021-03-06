<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use DataTables;

class ProyectoController extends Controller
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
    public function index(Request $request)
    {
        if(request()->ajax()){
            $data = Proyecto::select('proyectos.Pro_ID','proyectos.Nombre','proyectos.Estado',
            'proyectos.Ciudad','proyectos.Calle','proyectos.Fecha_Inicio','proyectos.Fecha_Fin',
            'empresas.Nombre as Empresa','Nombre_Estatus')
            ->where('Project_Manager_ID',auth()->user()->Empleado_ID)
            ->orWhere('Coordinador_Obra_ID',auth()->user()->Empleado_ID)
            ->orWhere('Foreman_ID',auth()->user()->Empleado_ID)
            ->orWhere('Coordinador_ID',auth()->user()->Empleado_ID)
            ->orWhere('Manager_ID',auth()->user()->Empleado_ID)
            ->leftJoin('empresas','proyectos.Emp_ID','=','empresas.Emp_ID')
            ->leftJoin('estatus','proyectos.Estatus_ID','=','estatus.Estatus_ID')
            ->get();
            
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('acciones', function($data){
                        $button = '<a href="'.route('listar.tickets',['id'=>$data->Pro_ID]).'"><i class="fas fa-clipboard-list ms-text-primary"></i></a>';
                        return $button;
                    })
                    ->rawColumns(['acciones'])
                    ->make(true);
        }
        return view('panel.proyecto.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function edit($id)
    {
        //
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
