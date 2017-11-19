<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    protected $table = 'pemesanans';
    
    protected $guarded = ['id','created_at', 'update_at'];

    //
}
