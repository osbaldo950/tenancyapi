<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerCreditNote extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps = false;
    public $table = 'customer_credit_notes';
    protected $guarded = ['id'];
    //obtener detalles
    public function customerCreditNoteDetails()
    {
        return $this->hasMany(CustomerCreditNoteDetails::class);
    }

    //obtener cliente
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
