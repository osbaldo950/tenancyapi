<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductOrService extends Model
{
    use HasFactory;
    public $table = 'product_or_servises';
    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'prod_serv_code',
        'unit_code',
        'unit',
        'cost_of_sales',
        'tax',
        'ieps_rate',
        'cost_of_sales',
        'profit',
        'subtotal',
        'iva',
        'total',
        'discount',
        'date_of_last_sale',
        'price_of_last_sale',
        'hazardous_product',
        'description',
    ];
}
