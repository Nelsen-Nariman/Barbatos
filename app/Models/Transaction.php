<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'transaction_date'
    ];

    static public function createHeaderTransaction() 
    {
        $transaction = Transaction::create([
            'user_id' => auth()->user()->id,
            'transaction_date' => Carbon::now()
        ]);

        return $transaction->id;
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function products() {
        return $this->belongsToMany(Product::class, 'transaction_details', 'transaction_id', 'product_id')->withPivot('quantity')->withTrashed();
    }

}
