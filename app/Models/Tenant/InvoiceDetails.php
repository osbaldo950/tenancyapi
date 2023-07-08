<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvoiceDetails extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps = false;
    public $table = 'invoice_details';
    protected $guarded = ['id'];
    //obtener registro al que pertenece el detalle
    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    //obtener producto
    public function productOrService(){
        return $this->belongsTo(ProductOrService::class);
    }
}
