<?php

namespace App\Models\sys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunidad extends Model
{
    use HasFactory;

    protected $table = "tbl_comunidades";

    protected $primary_key = 'ID_COMUNIDAD';

    public $incrementing = true;

    protected $guarded = ['ID_COMUNIDAD'];
}
