<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PollCategory extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'jenis_polling', 'keterangan_polling', 'created_at', 'twitter', 'id_kategori_polling', 'updated_at'
    ];

    public $timestamps = true;
    protected $table = 'kategoriartikel';
    protected $primaryKey = 'id_kategori_polling';
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}