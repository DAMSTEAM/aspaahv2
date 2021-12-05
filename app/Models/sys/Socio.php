<?php

namespace App\Models\sys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    use HasFactory;

    protected $table = "mae_socios";

    protected $primary_key = 'ID_SOCIO';

    public $incrementing = true;

    protected $guarded = ['ID_SOCIO'];

    public function comunidad() {
        return $this->belongsTo('App\Models\sys\Comunidad');
    }

    public function persona() {
        return $this->belongsTo('App\Models\sys\Persona');
    }
}
