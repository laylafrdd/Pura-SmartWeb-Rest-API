<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestOptions extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'opsi_test', 'created_at', 'id_opsi_test', 'kode_opsi', 'soal_test'
    ];
    public $timestamps = true;
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}