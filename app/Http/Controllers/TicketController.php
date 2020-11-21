<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\Proyecto;
use App\Material;
use App\Personal;
use DataTables;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id,Request $request)
    {
        if(request()->ajax()){
            $data = Ticket::where('proyecto_id',$id)
            ->where('empleado_id',auth()->user()->Empleado_ID)
            ->get();

            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('acciones', function($data){
                        $button = "<a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i></a> <a href='a'><i class='far fa-trash-alt ms-text-danger'></i></a>";
                        return $button;
                    })
                    ->rawColumns(['acciones'])
                    ->make(true);
        }
        return view('panel.ticket.list',compact('id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $proyecto = Proyecto::where('Pro_ID',$id)->first();
        $n_ticket = Ticket::count()+1;
        $address = trim("$proyecto->Ciudad, $proyecto->Zip_Code, $proyecto->Calle");
        $materiales = Material::where('Pro_ID',$id)->get();
        $foreman = Personal::where('Empleado_ID',$proyecto->Foreman_ID)->first();
        $name = (empty($foreman)) ? "" : trim($foreman->Nombre.$foreman->Apellido_Paterno.$foreman->Apellido_Materno);

        return view('panel.ticket.new',compact('id','proyecto','n_ticket','name','address','materiales'));
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
