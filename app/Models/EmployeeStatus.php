<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeStatus extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'status_karyawan', 'created_at', 'id_status', 'updated_at'
    ];
    public $timestamps = true;
    protected $table = 'statuskaryawan';
    protected $primaryKey = 'id_status';
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}