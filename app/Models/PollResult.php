<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PollResult extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'polling', 'pilihan_user', 'created_at', 'id_polling', 'user', 'isi_polling', 'opsi_polling', 'updated_at'
    ];
    public $timestamps = true;
    protected $table = 'hasilpolling';
    protected $primaryKey = 'id_polling';
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}