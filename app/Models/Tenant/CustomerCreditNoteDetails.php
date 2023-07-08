<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerCreditNoteDetails extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps = false;
    public $table = 'customer_credit_note_details';
    protected $guarded = ['id'];
    //obtener registro al que pertenece el detalle
    public function customerCreditNote()
    {
        return $this->belongsTo(CustomerCreditNote::class);
    }

    //obtener producto
    public function productOrService(){
        return $this->belongsTo(ProductOrService::class);
    }
}
