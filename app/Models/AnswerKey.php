<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnswerKey extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'soal_test', 'opsi_test', 'created_at', 'id_kunci', 'opsi_test_pilih', 'soal_test_pilih', 'updated_at'
    ];

    public $timestamps = true;
    protected $table = 'kuncijawaban';
    protected $primaryKey = 'id_kunci';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}