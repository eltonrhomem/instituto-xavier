<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Aluno extends Model
{
    use HasFactory;

    protected $connection = 'pgsql';
    protected $table = 'ix_aluno_c';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = true;
    

    protected $fillable = [

        'nmaluno',
        'nomeguerra',
        'datanascimento',
        'tiposanguineo',
        'sexo',
    ];

    
    public function getCreatedAtAttribute($value)
    {
        $data = new Carbon ($value);
        $data = $data->setTimezone('America/Sao_Paulo');
        $data = $data->format('d/m/Y H:i:s');
        return $data;

    }

    public function getUpdatedAtAttribute($value)
    {
        $data = new Carbon ($value);
        $data = $data->setTimezone('America/Sao_Paulo');
        $data = $data->format('d/m/Y H:i:s');
        return $data;

    }

    public function getDatanascimentoAttribute($value)
    {
        $data = new Carbon ($value);
        $data = $data->format('d/m/Y');
        return $data;

    }

    public function setDatanascimentoAttribute($value)
    {
        $data = Carbon::createFromFormat('d/m/Y' ,$value);
        $data = $data->format('Y-m-d');
        $this->attributes['datanascimento'] = $data;

    }
}
