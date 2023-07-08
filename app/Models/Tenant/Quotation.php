<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quotation extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = 'quotations';
    protected $guarded = ['id'];
    //obtener detalles
    public function quotationsDetails()
    {
        return $this->hasMany(QuotationDetails::class);
    }

    //obtener cliente
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}