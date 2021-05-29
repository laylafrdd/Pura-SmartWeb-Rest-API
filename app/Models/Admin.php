<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_admin', 'firstname', 'lastname', 'username', 'email', 'password', 'created_at', 'updated_at'
    ];

    public $timestamps = true;
    protected $table = 'admin';
    protected $primaryKey = 'id_admin';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];
}