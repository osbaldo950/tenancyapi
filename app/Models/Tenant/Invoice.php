<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps = false;
    public $table = 'invoices';
    protected $guarded = ['id'];
    //obtener detalles
    public function invoiceDetails()
    {
        return $this->hasMany(InvoiceDetails::class);
    }

    //obtener cliente
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
