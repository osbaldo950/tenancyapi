<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AccountReceivableDetails extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = 'accounts_receivable_details';
    protected $guarded = ['id'];
    //obtener registro al que pertenece el detalle
    public function accountsReceivable()
    {
        return $this->belongsTo(AccountReceivable::class);
    }

    //obtener factura
    public function invoice(){
        return $this->belongsTo(Invoice::class);
    }
}
