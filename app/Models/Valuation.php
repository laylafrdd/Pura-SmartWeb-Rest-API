<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Valuation extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_penilaian', 'skor', 'opsi', 'created_at', 'updated_at'
    ];
    public $timestamps = true;
    protected $table = 'penilaian';
    protected $primaryKey = 'id_penilaian';
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}