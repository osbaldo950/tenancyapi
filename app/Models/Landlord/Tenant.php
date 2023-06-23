<?php

namespace App\Models\Landlord;

use Illuminate\Notifications\Notifiable;
use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDatabase;
use Stancl\Tenancy\Database\Concerns\HasDomains;
use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;

class Tenant extends BaseTenant implements TenantWithDatabase
{
    use HasDatabase, HasDomains, Notifiable;

    public $incrementing = false;
    public static function getCustomColumns(): array
    {
        return [
            'id',
            'company',
            'email',
            'tenancy_domain',
            'role',
            'plan',
            'terms', 
            'data'
        ];
    }

}
