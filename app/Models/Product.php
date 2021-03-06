<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'code',
        'count',
        'color_id' ,
        'brand_id',
        'category_id',
        'user_id',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function color()
    {
        return $this->belongsTo(Color::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function productcount()
    {
        return $this->hasOne(ProductCount::class);
    }
}
