<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vouchers extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'vouchers';
    protected $guarded = ['id'];
    protected $fillable = [
        'voucher',
        'type',
        'version',
        'model_type',
        'model_id',
        'date_of_cancellation',
        'UUID',
        'date',
        'subtotal',
        'discount',
        'total',
        'certificate_SAT',
        'certificate_CFD',
        'original_chain',
        'seal_SAT',
        'seal_CFD',
        'id_facturapi',
        'verify_cdfi_url',
    ];    
}
