<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mahasiswas';

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
    protected $fillable = ['nim', 'nama', 'kelas', 'email', 'id_proram'];

    
}
