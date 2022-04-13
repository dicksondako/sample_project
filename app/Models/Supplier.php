<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'product_type', 'status'];

    public function user()
    {
        //return this->hasOne('App\Models\Supplier')
        return $this->belongsTo(User::class);
    }
}
