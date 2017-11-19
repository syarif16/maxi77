<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class crew extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'crews';

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
    protected $fillable = ['nama', 'pekerjaan', 'telepon', 'mulaiKerja'];

    
}
