<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model{
    use HasApiTokens, HasFactory, Notifiable , SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'phone',
        'points',
        'nif',
        'default_payment_type',
        'default_payment_reference',
        'custom'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User')->withTrashed();      // With trashed é o softdelete
    }
}