<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'code',
        'user_id',
        'order_at',
        'status',
        'amount',
        'discount',

    ];
    public function categoy()
    {
        $this->belongsTo(Category::class);
    }
    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function orders_detail()
    {
        $this->belongsTo(Order::class);
    }
}
