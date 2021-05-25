<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingHistory extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_history_training', 'created_at', 'id_history_training', 'user'
    ];
    public $timestamps = true;
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}