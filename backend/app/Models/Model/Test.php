<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'tests';
    protected $dates =  ['created_at', 'updated_at'];
    protected $fillable = ['id', 'title', 'naiyo'];
}
