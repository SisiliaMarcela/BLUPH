<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'orders';

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
    protected $fillable = ['order_id', 'id_location', 'date', 'nim', 'id_time', 'order_status', 'note', 'present', 'id_admin', 'handle_by'];

    
}
