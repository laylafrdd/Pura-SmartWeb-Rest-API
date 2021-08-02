<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingContent extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'isi_training', 'created_at', 'jenis_training', 'id_isi_training','kategori_training', 'updated_at'
    ];
    public $timestamps = true;
    protected $table = 'isitraining';
    protected $primaryKey = 'id_isi_training';
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}