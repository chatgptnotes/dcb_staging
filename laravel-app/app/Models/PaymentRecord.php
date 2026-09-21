<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentRecord extends Model
{
    protected $guarded = [];

    protected $casts = [
        'paid_at' => 'datetime',
        'invoice_sent_at' => 'datetime',
        'invoice_data' => 'array',
    ];
}
