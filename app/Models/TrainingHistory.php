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
        'nama_history_training', 'created_at', 'id_history_training', 'user', 'updated_at'
    ];
    public $timestamps = true;
    protected $table = 'historytraining';
    protected $primaryKey = 'id_history_training';
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}