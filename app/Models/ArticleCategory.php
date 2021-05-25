<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_kategori_artikel', 'created_at', 'id_kategori_artikel', 'updated_at'
    ];
    public $timestamps = true;
    protected $table = 'kategoriartikel';
    protected $primaryKey = 'id_kategori_artikel';
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
