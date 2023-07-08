<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AccountReceivableDetailsDocument extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps = false;
    public $table = 'accounts_receivable_details_documents';
    protected $guarded = ['id'];
    //obtener registro al que pertenece el detalle
    public function accountsReceivable()
    {
        return $this->belongsTo(AccountReceivable::class);
    }
}
