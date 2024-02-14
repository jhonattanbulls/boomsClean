<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'identification_card',
        'phone',
        'address',
    ];

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
