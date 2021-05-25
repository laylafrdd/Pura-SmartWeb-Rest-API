<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PollingOption extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'opsi_polling', 'created_at', 'id_opsi_polling', 'isi_polling'
    ];
    public $timestamps = true;
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}