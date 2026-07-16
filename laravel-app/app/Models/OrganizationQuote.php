<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OrganizationQuote extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'expires_at' => 'datetime',
        'access_ends_at' => 'datetime',
        'paid_at' => 'datetime',
        'shared_code_enabled' => 'boolean',
    ];

    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }

    public function seats(): HasMany
    {
        return $this->hasMany(OrganizationSeat::class);
    }

    public function enquiry(): BelongsTo
    {
        return $this->belongsTo(OrganizationEnquiry::class, 'organization_enquiry_id');
    }
}
