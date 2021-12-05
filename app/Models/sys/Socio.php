<?php

namespace App\Models\sys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    use HasFactory;

    protected $table = "mae_socios";

    protected $primary_key = 'PK_ID_SOCIO';

    public $incrementing = false;

    protected $guarded = ['PK_ID_SOCIO'];
}
