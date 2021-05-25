<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleContent extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'judul_artikel', 'isi_artikel', 'waktu_terbit', 'gambar', 'created_at', 'id_isi_artikel', 'status_karyawna', 'kategori_artikel', 'updated_at'
    ];
    public $timestamps = true;
    protected $table = 'isiartikel';
    protected $primaryKey = 'id_isi_artikel';
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}