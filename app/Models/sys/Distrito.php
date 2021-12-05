<?php

namespace App\Models\sys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    use HasFactory;

    protected $table = "tbl_distritos";

    protected $primary_key = 'ID_DISTRITO';

    public $incrementing = true;

    protected $guarded = ['ID_DISTRITO'];
}
