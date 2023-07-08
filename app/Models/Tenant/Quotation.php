<?php

namespace App\Models\Tenant;

use App\Models\QuotationDetails;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quotation extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = 'quotations';
    protected $guarded = ['id'];
    //one to many relationship
    public function quotationsDetails()
    {
        return $this->hasMany(QuotationDetails::class);
    }
}