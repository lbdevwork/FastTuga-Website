<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Order extends Model
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'ticket_number',
        'status',
        'customer_id',
        'total_price',
        'total_paid',
        'total_paid_with_points',
        'points_gained',
        'points_used_to_pay',
        'payment_type',
        'payment_reference',
        'date',
        'custom'
    ];

    protected $hidden = [
        'created_at', 'updated_at', 'deleted_at'
    ];

    

    public function products()
    {
        $this->belongsToMany(Product::class, 'order_items')->withTrashed();
    }

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer')->withTrashed();
    }

    public function users()
    {
        $this->belongsToMany(User::class, 'order_items', 'id', 'preparation_by')->withTrashed();
    }

    public function delivered_by()
    {
        $this->belongsTo(User::class)->withTrashed();
    }

}
