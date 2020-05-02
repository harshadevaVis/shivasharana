<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $table = 'user_role';
    protected $primaryKey = 'iduser_role';

    public function users()
    {
        return $this->belongsTo(User::class, 'iduser_role');
    }
}
