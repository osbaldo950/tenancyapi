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
    //obtener cotizaciones details
    public function quotationsDetails()
    {
        return $this->hasMany(QuotationDetails::class);
    }
    //obtener detalles nota de credito
    public function customerCreditNoteDetails()
    {
        return $this->hasMany(CustomerCreditNoteDetails::class);
    }
    //obtener detalles factura
    public function invoiceDetails()
    {
        return $this->hasMany(InvoiceDetails::class);
    }
}
