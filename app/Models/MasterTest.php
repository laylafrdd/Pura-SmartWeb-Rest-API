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
        'nama_test', 'created_at', 'id_master', 'updated_at'
    ];
    public $timestamps = true;
    protected $table = 'mastertes';
    protected $primaryKey = 'id_master';
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}