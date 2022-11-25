<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'admins';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_admin', 'username', 'password', 'permission', 'access_date', 'access_time', 'active'];

    
}
