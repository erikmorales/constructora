<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'personal';
    protected $primaryKey = 'Empleado_ID';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Emp_ID', 'Nombre', 'Apellido_Paterno', 'Apellido_Materno', 'Nick_Name', 'Estado','Ciudad','Zip_Code',
        'Calle','Numero','Cargo','Numero_Seguro_Social','Fecha_Nacimiento','Numero_Licencia_Conducir','Numero_Permiso_Trabajo',
        'Fecha_Expiracion_Trabajo','Numero_Residente','email','Telefono','Usuario','Indice_produccion','Nro_Bono','Spec_Bon1',
        'Not_Bon','Extra_Mon1','Benefit1','Benefit2','empresa'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'Password', 'remember_token',
    ];

}
