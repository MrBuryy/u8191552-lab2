<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'addresses';

    protected $fillable = [
        'customer_id',
        'title',
        'city',
        'street',
        'house',
        'floor',
        'flat',
        'intercom_code'
    ];

    public function customer()
    {
        $this->belongsTo(Customer::class);
    }
}
