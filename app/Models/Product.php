<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "products";
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'category_id',
        'detail',
        'price',
        'photo'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function transactions() {
        return $this->belongsToMany(Transaction::class, 'transaction_details', 'product_id', 'transaction_id');
    }
}
