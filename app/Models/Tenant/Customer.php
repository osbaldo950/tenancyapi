<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps = false;
    public $table = 'customers';
    protected $guarded = ['id'];
    //obtener cotizaciones
    public function quoations()
    {
        return $this->hasMany(Quotation::class);
    }
    //obtener facturas
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
    //obtener notas credito
    public function customerCreditNotes()
    {
        return $this->hasMany(CustomerCreditNote::class);
    }
}
