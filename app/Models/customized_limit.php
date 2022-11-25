<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class customized_limit extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'customized_limit';

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
    protected $fillable = ['date', 'limit'];

    
}
