<?php

namespace App\Models\sys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;

    protected $table = "tbl_provincias";

    protected $primary_key = 'ID_PROVINCIA';

    public $incrementing = true;

    protected $guarded = ['ID_PROVINCIA'];
}
