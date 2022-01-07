<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'name', 'surname', 'agency_id', 'cell', 'email', 'nationalid'];
    protected $guarded;

    //use Illuminate\Support\Str;

    protected static function boot() {
        parent::boot();
        static::creating(function ($agent) {
            $agent->slug = substr($agent->cell, 3,6) . substr($agent->name, 0, 2);
        });


    }

    public function agency_name()
    {
        return $this->belongsTo(Agency::class, 'agency_id', 'id');
    }
}
