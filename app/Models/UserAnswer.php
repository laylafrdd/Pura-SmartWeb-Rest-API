<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'soal_test_user', 'opsi_test_user', 'created_at', 'id_jawaban', 'user', 'soal_test', 'opsi_test', 'updated_at'
    ];
    public $timestamps = true;
    protected $table = 'jawabanuser';
    protected $primaryKey = 'id_jawaban';
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}