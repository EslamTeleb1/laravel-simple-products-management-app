<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class size extends Model
{


    protected $table = 'sizes2';
    protected $primaryKey = 'Size_ID';
    public $timestamps = false;

    use HasFactory;
}
