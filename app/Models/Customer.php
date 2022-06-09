<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'name',
        'surname',
        'phone',
        'is_blocked',
        'email'
    ];

    public function address(): HasMany
    {
        return $this->hasMany(Address::class);
    }
}
