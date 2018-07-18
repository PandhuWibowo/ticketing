<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model{
    use SoftDeletes;

    protected $table = 'locations';
    protected $fillable = [
        "name_location","address"
    ];

    protected $guarded = ['id'];
}