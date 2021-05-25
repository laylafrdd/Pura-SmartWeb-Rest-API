<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matriks extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'bulan_matriks', 'nilai_performa', 'created_at', 'id_matriks', 'user'
    ];
    public $timestamps = true;
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}