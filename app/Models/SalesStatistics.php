<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesStatistics extends Model
{
    use HasFactory;

    protected $table = 'sales_statistics';

    protected $fillable = [
        'product_id',
        'total_sales',
        'revenue',
    ];

    /**
     * Get the product associated with the sales statistics.
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
