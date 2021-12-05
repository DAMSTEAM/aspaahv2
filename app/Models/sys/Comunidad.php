<?php

namespace App\Models\sys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunidad extends Model
{
    use HasFactory;

    protected $table = "tbl_comunidades";

    protected $primary_key = '';

    public $incrementing = true;

    protected $guarded = [''];

    public function distrito() {
        return $this->belongsTo('App\Models\sys\Distrito');
    }

    public function socios() {
        return $this->hasMany('App\Models\sys\Socio', '', 'ID_SOCIO');
    }
}
