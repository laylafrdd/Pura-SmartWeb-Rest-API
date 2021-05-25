<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingCategory extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'deskripsi_training', 'created_at', 'waktu_training', 'gambar', 'nama_training', 'id_training', 'user', 'updated_at'
    ];
    public $timestamps = true;
    protected $table = 'kategoritraining';
    protected $primaryKey = 'id_training';
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}