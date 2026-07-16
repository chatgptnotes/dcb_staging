<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrganizationSeat extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'access_ends_at' => 'datetime',
        'invite_expires_at' => 'datetime',
        'claimed_at' => 'datetime',
    ];

    public function quote(): BelongsTo
    {
        return $this->belongsTo(OrganizationQuote::class, 'organization_quote_id');
    }
}
