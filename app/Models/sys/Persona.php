<?php

namespace App\Models\sys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = "mae_personas";

    protected $primary_key = 'PK_ID_SOCIO';

    public $incrementing = true;

    protected $guarded = ['PK_ID_SOCIO'];
}
