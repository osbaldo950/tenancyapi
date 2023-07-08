<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QuotationDetails extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = 'quotation_details';
    protected $guarded = ['id'];
    //obtener registro al que pertenece el detalle
    public function quotation()
    {
        return $this->belongsTo(Quotation::class);
    }

    //obtener producto
    public function productOrService(){
        return $this->belongsTo(ProductOrService::class);
    }
}

