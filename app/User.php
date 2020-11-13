<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'operators';
    protected $primaryKey = 'OperatorID';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Username', 'Password', 'Email', 'Name', 'LastName', 'Phone','Mobile','Direccion',
        'Zona','Latitud','Longitud','CI','Calle_Principal','Calle_Colindante1','Calle_Colindante2',
        'Numeral'
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
