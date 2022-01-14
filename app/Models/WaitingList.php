<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaitingList extends Model
{
    use HasFactory;

   protected $fillable = ['client_id', 'property_id']; 
   protected $with = ['userss'];

   public function userss()
   {
       return $this->belongsTo(WaitingList::class, 'client_id', 'id');
   }
}
