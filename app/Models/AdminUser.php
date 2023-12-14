<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model
{
    use HasFactory;

    protected $table = 'admin_user';

    protected $fillable = [
        'nama',
        'jabatan',
        'role_id',
        'nip',
        'user',
        'pass',
    ];

    public $timestamps = false;

}
