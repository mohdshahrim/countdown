<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countdown extends Model
{
    use HasFactory;
    protected $fillable = ['id','userid','title','description','datetime','urlsuffix'];
    public $timestamps = false;
}
