<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class People extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'people';
    protected $dates = ['deleted_at'];
    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];
}
