<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    public function permissions(){
        return $this->hasMany(Permission::class, 'module_id', 'id');
    }
}
