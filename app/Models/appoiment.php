<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appoiment extends Model
{
    use HasFactory;

    #validamos el tipo de datos y camppo en nusestro modelo
    static $rules =[
        'name'=> 'required|string',
        'lastName'=> 'required|string',
        'identification'=> 'required|string',
        'start'=> 'required|string',
        'end'=> 'required|string',

    ];

    protected $table = "appoiment";

    #especifiacmos campos a recibir y insertar en nustra base de datos
    protected $fillable =[
        "name",
        "lastName",
        "identification",
        "mascot",
        "start",
        "end"

    ];
}
