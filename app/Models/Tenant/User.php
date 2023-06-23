<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Model
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, SoftDeletes;
    
    protected $guard_name = 'web';
    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

}
