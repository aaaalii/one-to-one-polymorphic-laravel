<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;

    // function name should be same as the coloumn name in images tables before '_', which stores ids of other tables
    public function img(){
        return $this->morphTo();
    }
}
