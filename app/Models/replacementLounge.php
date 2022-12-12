<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class replacementLounge extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'replacement_lounges';

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
    protected $fillable = ['nama_student', 'studentID', 'intake', 'jadwal_jam_kuliah', 'alasan_melakukan_replacement_class'];

    
}
