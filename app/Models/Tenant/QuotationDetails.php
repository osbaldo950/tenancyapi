<?php

namespace App\Models\Tenant;

use App\Models\Quotation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QuotationDetails extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = 'quotation_details';
    protected $guarded = ['id'];
    // one to many (Inverse)
    public function quotation()
    {
        return $this->belongsTo(Quotation::class);
    }
}

