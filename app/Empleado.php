<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Empleado extends Model
{

    use Notifiable;
    protected $table = 'empleados';
    protected $fillable = [
        'cedula','nombres','apellidos', 'fecha_cumple', 'foto',
    ];
    protected $guarded = ['id'];

    public function scopeCedula($query, $cedula){
        if($cedula)
        return $query->where('cedula', 'LIKE', "%$cedula%");
    }

    public function scopeNombres($query, $nombres){
        if($nombres)
            return $query->where('nombres',$nombres);
    }

}
