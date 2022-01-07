<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = ['type_id', 'location', 'agency_id', 'Description', 'price', 'images'];

    protected $with = ['property_type','agency'];

    public function property_type()
    {
        return $this->belongsTo(PropertyType::class, 'type_id', 'id');
    }
 
    public function agency()
    {
        return $this->belongsTo(Agency::class, 'agency_id', 'id');
    }
}


