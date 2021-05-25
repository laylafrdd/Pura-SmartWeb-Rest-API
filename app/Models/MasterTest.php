<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterTest extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_test', 'created_at', 'id_master'
    ];
    public $timestamps = true;
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}