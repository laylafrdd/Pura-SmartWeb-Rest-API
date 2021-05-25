<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingFeedback extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fasilitas', 'multimedia', 'modul', 'konsumsi', 'relevansi', 'kesan_positif', 'kesan_negatif', 'created_at', 'id_training_feedback', 'masukkan_training_selanjutnya', 'isi_training', 'user'
    ];
    public $timestamps = true;
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}