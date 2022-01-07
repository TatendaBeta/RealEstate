<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;

    protected $guarded;
    protected $fillable = ['name', 'vat_number', 'bpn_number', 'location', 'cell', 'email'];

}
