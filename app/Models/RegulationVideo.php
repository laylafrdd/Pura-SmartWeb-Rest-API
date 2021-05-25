<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegulationVideo extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'video_peraturan', 'nama_peraturan', 'link_youtube', 'created_at', 'id_video', 'status_karyawan', 'updated_at'
    ];
    public $timestamps = true;
    protected $table = 'videoperaturan';
    protected $primaryKey = 'id_video';
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}