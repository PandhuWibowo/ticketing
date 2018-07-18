<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model{
    use SoftDeletes;

    protected $table = 'events';
    protected $fillable = [
        "name","eo","cp","description","loc_id","schedule_id"
    ];

    protected $guarded = ['event_id'];
}