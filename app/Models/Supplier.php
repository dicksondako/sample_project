<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Product;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'company', 'product_type', 'status',
    ];

    public function user()
    {
        //return this->belongsTo('App\Models\User')
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
