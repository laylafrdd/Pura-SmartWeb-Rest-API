<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PollingContent extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'isi_polling', 'created_at', 'id_isi_polling', 'kategori_polling', 'updated_at'
    ];
    public $timestamps = true;
    protected $table = 'isipolling';
    protected $primaryKey = 'id_isi_polling';
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}