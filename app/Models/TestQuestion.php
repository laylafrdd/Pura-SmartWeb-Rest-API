<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestQuestion extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'soal_test', 'created_at', 'id_soal_test', 'kode_soal', 'master_test', 'updated_at'
    ];
    public $timestamps = true;
    protected $table = 'soaltest';
    protected $primaryKey = 'id_soal_test';
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}