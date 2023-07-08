<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AccountReceivable extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = 'accounts_receivable';
    protected $guarded = ['id'];
    //obtener detalles
    public function accountsReceivableDetails()
    {
        return $this->hasMany(AccountReceivableDetails::class);
    }

    //obtener cliente
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    
}
