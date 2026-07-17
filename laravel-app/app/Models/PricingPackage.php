<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Admin-managed pricing catalog row. Backs the /pricing cards and the
 * billing catalog (see App\Services\Billing\PackageCatalog).
 *
 * NOTE: `slug` is the entitlement key — it is stored on user rows, sent to
 * Stripe as metadata and matched by route guards. It is seeded, never edited
 * from the admin UI.
 */
class PricingPackage extends Model
{
    use HasFactory;

    protected $table = 'pricing_packages';
    protected $primaryKey = 'id';

    protected $fillable = [
        'slug',
        'title',
        'subtitle',
        'age_range',
        'price_label',
        'old_price_label',
        'amount',
        'currency',
        'billing_interval',
        'features',
        'button_text',
        'cta_mode',
        'price_suffix',
        'stripe_price_id',
        'stripe_product_id',
        'type',
        'is_visible',
        'sort_order',
    ];

    protected $casts = [
        'is_visible' => 'boolean',
        'sort_order' => 'integer',
        'amount' => 'decimal:2',
    ];

    /** Currency symbol for the stored currency code (display only). */
    public function currencySymbol(): string
    {
        return [
            'usd' => '$', 'eur' => '€', 'gbp' => '£', 'inr' => '₹', 'aud' => 'A$', 'cad' => 'C$',
        ][strtolower((string) $this->currency)] ?? strtoupper((string) $this->currency) . ' ';
    }

    /** Build the display label from amount + currency, e.g. "$300" or "$19.99". */
    public function formattedPrice(): string
    {
        $amount = (float) $this->amount;
        $decimals = fmod($amount, 1.0) === 0.0 ? 0 : 2;

        return $this->currencySymbol() . number_format($amount, $decimals);
    }

    /**
     * Features stored one-per-line; return as a trimmed array for rendering.
     *
     * @return array<int, string>
     */
    public function featureList(): array
    {
        $lines = preg_split('/\r\n|\r|\n/', (string) $this->features) ?: [];

        return array_values(array_filter(array_map('trim', $lines), fn ($l) => $l !== ''));
    }
}
